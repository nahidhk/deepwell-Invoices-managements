<?php
$host = "localhost";
$username = "root";
$password = "51614824"; 
$database = "invoice"; 


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
