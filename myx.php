<?php
require_once("./config.php");

$invoiceid = 11; 

$sql = "SELECT * FROM invoice WHERE accountno = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing the statement: " . $conn->error);
}

$stmt->bind_param("i", $invoiceid);
$stmt->execute();
$result = $stmt->get_result();

$totalAmount = 0; // Total rakhar jonno variable

while ($row = $result->fetch_assoc()) {
    $totalAmount += $row['amaount']; // Sob transaction jog korbo
}

$conn->close();
?>


