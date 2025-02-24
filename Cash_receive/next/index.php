<?php 
$accno = $_POST['accno'];
require_once("../../config.php");
require_once("../../inwords.php");
date_default_timezone_set('Asia/Dhaka');

if (!isset($conn)) {
    die("Database connection not found!");
}

$invoiceid = $accno; 


$invoiceQuery = "SELECT * FROM invoice WHERE accountno = ?";
$invoiceStmt = $conn->prepare($invoiceQuery);
if (!$invoiceStmt) {
    die("Prepare failed: " . $conn->error);
}
$invoiceStmt->bind_param("i", $invoiceid); 
$invoiceStmt->execute();
$invoiceResult = $invoiceStmt->get_result();

if ($invoiceResult->num_rows === 0) {
    die("Invoice not found!");
}

$invoices = $invoiceResult->fetch_all(MYSQLI_ASSOC);



$customerQuery = "SELECT * FROM farmers WHERE id = ?";
$customerStmt = $conn->prepare($customerQuery);
if (!$customerStmt) {
    die("Prepare failed: " . $conn->error);
}
$customerStmt->bind_param("i", $accno); 
$customerStmt->execute();
$customerResult = $customerStmt->get_result();

// if ($customerResult->num_rows === 0) {
//     die("Customer not found!");
// }
$customerData = $customerResult->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH::Invoice</title>
</head>

<body>
    <?php require_once('../../components/nav.html') ?>
    <br>
    <section class="flex center">
        <div class="frmbox">
            <h2>Customer Cash Recave</h2>
            <hr>
            <form action="/Cash_receive/next/" method="post">
                <label for="">Account NO</label><br>
                <input readonly name='accno' id='accno' value="<?php echo $accno ?>" type="number" class="input"
                    required>
                <br>
                <label for="">Amount *</label><br>
                <input type="number" id='amaount' class="input" required>
                <input type="text">
                <br>
                <div class="textcenter">
                    <button class='btn'>Next</button>
                </div>
            </form>
        </div>
    </section>


<h1>
    <?php echo $customerData['credit'] ?>
</h1>



    <br><br>
    <!-- tabel -->

    <section class="flex center">

        <table class="minimalistBlack">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>invoice NO</th>
                    <th>Detels</th>
                    <th>Land</th>
                    <th>Staps</th>
                    <th>Price X</th>
                    <th>Total Amount</th>


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
                    echo "<td>" . date("d M Y, h:i A", strtotime($invoice['created'])) . "</td>";
                    echo "<td>" . $invoice['invoiceid'] . "</td>"; 
                    echo "<td>" . htmlspecialchars($invoice['notes']) . "</td>";
                    echo "<td> (" . htmlspecialchars($invoice['description']) . ") " .$invoice['dpct']." ". $invoice['quantity']." ".  $invoice['unit']." ". $invoice['crop'].  "</td>"; 
                    echo "<td>" . htmlspecialchars($invoice['users']) . "</td>";
                    echo "<td>" . number_format($invoice['price'],2) . "</td>"; 
                    echo "<td>" . number_format($invoice['amaount'], 2) . "</td>"; 
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
                    <td rowspan="4" colspan="6" class="textcenter">
                        <div class="flex anaround">
                            <div id="qrcode"></div>
                            <div>
                                <p>In Words: <small> (<?php echo ucfirst(numberToWords($netTotal)); ?> Tk. Only)</small>
                                </p>
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

    </section>


    <script src='/app.js'></script>
    <script src='/login.js'></script>
    <script src="/Cash_receive/vercel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>