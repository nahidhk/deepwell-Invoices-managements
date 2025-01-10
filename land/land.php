<?php 
require_once('../config.php');

$account = $_POST['account'];
$description = $_POST['description'];
$depid = $_POST['depid'];
$quantity = $_POST['quantity'];
$unit = $_POST['unit'];
$showunit = $_POST['showunit'];

$sql = "INSERT INTO lands (account , description , depid , quantity , unit , showunit)
VALUES ('$account','$description' , '$depid' , '$quantity' , '$unit' , '$showunit')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/land'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
