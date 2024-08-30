<?php
$servername = "localhost";
$username = "root";
$password = "Motionless@123";
$database = "DB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






?>