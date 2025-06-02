<?php
$host = "127.0.0.1:3310"; // Updated to include the correct port
$user = "root";
$pass = "";
$db   = "login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
}
?>
