<?php 
require_once('../config.php');

$name = $_POST['name'];

$sql = "INSERT INTO groupx (name)
VALUES ('$name')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/group'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
