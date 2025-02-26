<?php
// Database configuration
$servername = "localhost"; // Your server name, usually 'localhost'
$username = "raji"; // Your MySQL username
$password = "raji"; // Your MySQL password
$dbname = "project"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Your additional logic to handle form data submission will go here

// Close the connection when done
$conn->close();
?>