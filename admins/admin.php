<?php 
require_once('../config.php');

$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['mobile'];
$pin = $_POST['pin'];

$sql = "INSERT INTO users (name , username , mobile , pin)
VALUES ('$name','$username','$phone','$pin')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/admins'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
