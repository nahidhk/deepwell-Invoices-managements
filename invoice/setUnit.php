<?php 
require_once('../config.php');

$apidata = $_GET['apidata'];

$sql = "INSERT INTO units (name)
VALUES ('$apidata')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/invoice'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
