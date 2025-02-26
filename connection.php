<?php
// Database configuration
$host = 'localhost';        // Database host
$username = 'root1'; // Database username
$password = 'raji'; // Database password
$dbname = 'project';   // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<script>
alert("Login successfully");
window.location.href="home.php";
</script>';

// Close the connection when done
$conn->close();
?>