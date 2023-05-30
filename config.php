<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create a connection to the database        
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_error());
}
?>