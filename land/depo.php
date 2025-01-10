<?php 
require_once('../config.php');

$name = $_POST['depo'];
$username = $_POST['unit'];
$sql = "INSERT INTO depo (depo , unit)
VALUES ('$name','$username')";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/land'</script>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
