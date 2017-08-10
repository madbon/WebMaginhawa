<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stiapi_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    alert("Connection failed: " . $conn->connect_error);
} 
?>
