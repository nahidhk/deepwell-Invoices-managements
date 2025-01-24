<?php
require_once("../../config.php");
require_once("../../inwords.php");
date_default_timezone_set('Asia/Dhaka');
// Ensure $conn is defined and properly initialized
if (!isset($conn)) {
    die("Database connection not found!");
}

$invoiceid = $_GET['invoiceid']; // Replace with dynamic value if needed

// Fetch invoice details securely using positional placeholders
$invoiceQuery = "SELECT * FROM invoice WHERE invoiceid = ?";
$invoiceStmt = $conn->prepare($invoiceQuery);
if (!$invoiceStmt) {
    die("Prepare failed: " . $conn->error);
}
$invoiceStmt->bind_param("i", $invoiceid); // Bind $invoiceid as an integer
$invoiceStmt->execute();
$invoiceResult = $invoiceStmt->get_result();

if ($invoiceResult->num_rows === 0) {
    die("Invoice not found!");
}

$invoices = $invoiceResult->fetch_all(MYSQLI_ASSOC);

$accountno = $invoices[0]['accountno']; 


$customerQuery = "SELECT * FROM farmers WHERE id = ?";
$customerStmt = $conn->prepare($customerQuery);
if (!$customerStmt) {
    die("Prepare failed: " . $conn->error);
}
$customerStmt->bind_param("i", $accountno); // Bind $accountno as an integer
$customerStmt->execute();
$customerResult = $customerStmt->get_result();

if ($customerResult->num_rows === 0) {
    die("Customer not found!");
}
$customerData = $customerResult->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
</head>

<body>


    <div class="flex center">
        <!-- view Box -->
        <div class='textcenter'>
            <br>
            <h1 class='nomargin'>This is a commpany Name</h1>
            <p class='nomargin'>This Is Commpany Address and road no </p>
            <p class="nomargin">Mobile: 1234567890, 0987654321 , Email: mail@exampule.com & website: www.exampule.com
            </p>
        </div>
    </div>
    <hr>
    <div class="flex anaround">
       <div>Good Morining</div>
        <div style='border: 1px  dotted black; padding: 10px;'>
            <h2 class="nomargin">Cash Invoice</h2>
        </div>
        <div><svg id='barcode'></svg></div>
    </div>
    <hr>
    <blockquote>
        <div class="flex center">
            <!-- Coustomear Info -->
            <div style='width: 100%' class="flex beet">
                <div class="flex anaround">
                    <div style='width: 150px;'>
                        <p>Invoice No</p>
                        <p>Customer Name</p>
                        <p>Father's name</p>
                        <p>Customer Reg No</p>
                    </div>
                    <div>

                        <p>: <b><?php echo $_GET['invoiceid'] ?></b></p>
                        <p>: <b><?php echo $customerData['name'] ?></b></p>
                        <p>: <?php echo $customerData['fathername'] ?></p>
                        <p>: RD<?php echo $customerData['id'] ?></p>
                    </div>
                </div>
                <div class="flex beet">
                    <div style='width: 100px;'>
                        <p>Date</p>
                        <p>Invoice Date</p>
                        <p>Address</p>
                        <p>Phone</p>
                    </div>
                    <div>
                        <p>: <?php echo date('d/m/y h:i:s A') ?></p>
                        <p>: <b><?php echo $invoices[0]['submitdate']?></b></p>
                        <p>: <?php echo $customerData['address'] ?></p>
                        <p>: +88<?php echo $customerData['phone'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- tabel -->

        <table class="minimalistBlack">
            <thead>
                <tr>
                    <th>#</th>

                    <th>Detels</th>
                    <th>Land</th>
                    <th>Staps</th>
                    <th>Price X</th>  
                    <th>Total Amount</th>
                    <th>Received Amount</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php 
                  $totalAmount = 0; 
                  $totalLess = 0;
                 $netTotal = 0;
                 $receivedAmount = 0;
                 $dueAmount = 0;
                $counter = 1; 
                foreach ($invoices as $invoice) {
                    echo "<tr>";
                    echo "<td>" .  $counter . "</td>"; 
                    echo "<td>" . htmlspecialchars($invoice['notes']) . "</td>";
                    echo "<td> (" . htmlspecialchars($invoice['description']) . ") " .$invoice['dpct']." ". $invoice['quantity']." ".  $invoice['unit']." ". $invoice['crop'].  "</td>"; 
                    echo "<td>" . htmlspecialchars($invoice['users']) . "</td>";
                    echo "<td>" . number_format($invoice['price'],2) . "</td>"; 
                    echo "<td>" . number_format($invoice['amaount'], 2) . "</td>"; 
                    echo "<td>" . number_format($invoice['receive'], 2) . "</td>"; 
                    echo "</tr>";
                    $amount = (float)$invoice['amaount']; 
                    $totalAmount += $amount;
                    $less = (float)$invoice['less'];
                    $totalLess += $less;
                    $netTotal = $totalAmount - $totalLess;
                    $receivedAmount = (float)$invoice['receive'];
                    $receiveall += $receivedAmount;
                    $totalDue = $netTotal - $receiveall;
                    $counter++;
                }
               
 ?>
            </tbody>
            <tfoot>
                <tr>
                     <td rowspan="4" colspan="4" class="textcenter">
                        <div class="flex anaround">
                        <div id="qrcode"></div>
                       <div>
                       <h1><?php echo htmlspecialchars($invoice['typex'])?></h1><p>In Words: <small> (<?php echo ucfirst(numberToWords($netTotal)); ?> Tk. Only)</small></p>
                       </div>
                        </div>
                     </td> 
                    <th>Total Amount</th>
                    <th><?php echo number_format($totalAmount ,2)?></th>
                    <!-- <td rowspan="4"></td> -->
                </tr>
                <tr>

                    <th>Less <br> Net Total</th>
                    <td><?php echo number_format($totalLess ,2)?> <br> <?php echo number_format($netTotal ,2)?>
                    </td>
                    
                </tr>
                <tr>
                    <th> Total Received Amount</th>
                    <td><?php echo number_format($receiveall ,2)?> </td>  
                </tr>
                <tr>
                    <th>Due Amount</th>
                    <td><?php echo number_format($totalDue ,2)?></td>   
                </tr>
            </tfoot>
        </table>

        </div>


    </blockquote>

    <div class="flex anaround">
        <div class='textcenter' style='border: 1px solid black; padding: 10px; width:200px'>
            <button onclick="window.location.href = '/index.php';" class="btn">Back</button>
            <button class="btn">Print</button>
        </div>
    </div>


    <script>
    new QRCode(document.getElementById("qrcode"), {
        text: window.location.protocol + "//" + window.location.host + 
                  "/printInvoice/onlyInvoice/?invoiceid=<?php echo $invoiceid ?>",
        width: 90,
        height: 90,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
    });
    </script>
    <script>
    JsBarcode("#barcode", "<?php echo $invoiceid ?>", {
        format: "CODE128",
        lineColor: "#000",
        width: 2,
        height: 30,
        displayValue: false,
    });
    </script>

</body>

</html>