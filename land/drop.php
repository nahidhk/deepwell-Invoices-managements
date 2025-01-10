<?php
$id=$_GET['id'];
require_once('../config.php');
$sql = "DELETE FROM lands WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/land'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>