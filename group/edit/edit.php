<?php
require_once("../../config.php");
$id = $_POST['id'];
$name = $_POST['name'];
$sql = "UPDATE groupx SET name=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $name,  $id);

if ($stmt->execute()) {
    echo "<script>window.location.href='/group'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$stmt->close();
$conn->close();
?>