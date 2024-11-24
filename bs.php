<?php 
require_once('./config.php');

$name = $_POST['name'];
$fathername = $_POST['fathername'];
$mathername = $_POST['mathername'];
$phone = $_POST['phone'];
$email = $_POST['email'];





$sql = "INSERT INTO boss (name, fathername, mathername, phone, email)
VALUES ('$name','$fathername','$mathername','$phone','$email')";


if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>