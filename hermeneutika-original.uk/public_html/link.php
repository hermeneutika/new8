<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "michael";
$password = "A7ndromeda!1";
$dbname = "rev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "connected to $dbname";
?>

