<?php
require_once("../../config.php");
$id = $_POST['id'];
$name = $_POST['name'];
$fname = $_POST['fathername'];
$mathername = $_POST['mathername'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$groupx = $_POST['groupx'];

$sql = "UPDATE farmers SET name=? , fathername=? , mathername=?,  phone=?, email=?, address =? ,groupx=?  WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $name, $fname ,$mathername ,$phone , $email ,$address ,$groupx,  $id);

if ($stmt->execute()) {
    echo "<script>window.location.href='/info'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$stmt->close();
$conn->close();
?>