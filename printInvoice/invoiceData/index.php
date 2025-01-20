<?php 
require_once("../../config.php");
$start_date = '2025-01-20';
$end_date = '2025-01-20';
$sql = "SELECT * FROM invoice WHERE submitdate BETWEEN ? AND ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $start_date, $end_date);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Date: " . $row['submitdate'] . " - Amount: " . $row['amaount'] . "<br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>