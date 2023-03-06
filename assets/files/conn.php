<?php
$servername = "localhost";
$username = "root"; // Replace with your own MySQL username
$password = ""; // Replace with your own MySQL password
$dbname = "uig";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
