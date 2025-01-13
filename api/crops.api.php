<?php
header('Content-Type: application/json');
require_once('../config.php');
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}
$sql = "SELECT * FROM `Crops`"; 
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$data = array_reverse($data);
echo json_encode($data);
$conn->close();
?> 