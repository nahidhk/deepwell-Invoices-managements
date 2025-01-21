<?php
require_once("../../config.php");

// Ensure $conn is defined and properly initialized
if (!isset($conn)) {
    die("Database connection not found!");
}

$invoiceid = 2001825; // Replace with dynamic value if needed

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
        <div style='border: 1px  dotted black; padding: 10px;'>
            <h2 class="nomargin">Cash Invoice</h2>
        </div>
    </div>
    <hr>
    <div class="flex center">
        <!-- Coustomear Info -->
        <div style='width: 100%' class="flex beet">
            <div class="flex anaround">
                <div style='width: 150px;'>
                    <p>Invoice No</p>
                    <p>Coustomare Name</p>
                    <p>Father's Name</p>
                </div>
                <div>
                    <p>: <b>1234567890</b></p>
                    <p>: <b>MD NAHID HK</b></p>
                    <p>: Md Fozlus Haque</p>
                </div>
            </div>
            <div class="flex beet">
                <div style='width: 100px;'>
                    <p>Invoice Date</p>
                    <p>Address</p>
                    <p>Phone</p>
                </div>
                <div>
                    <p>: <b>12/12/2020</b></p>
                    <p>: ataikula pabna bangla desh</p>
                    <p>: +8801877357091</p>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- tabel -->
    <main class="border tabscroll">
        <table class="minimalistBlack frmbox">
            <thead>
                <tr>
                    <th>#</th>
                    <td>ID</td>
                    <th>Date</th>
                    <th>Land</th>
                    <th>Price X</th>
                    <th>Total Amount</th>
                    <th>Notes</th>
                    <th>Staps</th>
                </tr>
            </thead>
            <tbody>
 <?php 
                $counter = 1; // For row numbering
                foreach ($invoices as $invoice) {
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>"; // Row number
                    echo "<td>" . htmlspecialchars($invoice['id']) . "</td>"; // ID column
                    echo "<td>" . htmlspecialchars($invoice['submitdate']) . "</td>"; // Date column
                    echo "<td> (" . htmlspecialchars($invoice['description']) . ")" .$invoice['dpct']. $invoice['quantity'].  $invoice['unit']. $invoice['crop'].  "</td>"; // Land column
                    echo "<td>" . htmlspecialchars($invoice['price']) . "</td>"; // Price X column
                    echo "<td>" . htmlspecialchars($invoice['amaount']) . "</td>"; // Total Amount column
                    echo "<td>" . htmlspecialchars($invoice['notes']) . "</td>"; // Notes column
                    echo "<td>" . htmlspecialchars($invoice['users']) . "</td>"; // Staps column
                    echo "</tr>";
                    $counter++;
                }
 ?>

            </tbody>
        </table>
    </main>
    </div>

</body>

</html>