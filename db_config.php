<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "baybytes";

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>