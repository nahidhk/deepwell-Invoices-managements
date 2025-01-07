<?php 
require_once('./config.php');

$name = $_POST['name'];
$fathername = $_POST['fathername'];
$mathername = $_POST['mathername'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$groupx = $_POST['groupx'];
$sql = "INSERT INTO farmers (name, fathername, mathername, phone, email , address , groupx)
VALUES ('$name','$fathername','$mathername','$phone','$email','$address' , '$groupx')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
