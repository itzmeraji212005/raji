<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "project"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email']; // Fixed variable name
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password); // Type of parameters

    if ($stmt->execute()) {
		echo '<script>
		window.location.href="demo.php";
		alert("Login Successfully")</script>';
		exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-image:url('vote2.jpg');
	background-size: cover; /* Options: cover, contain, or specify dimensions */
            /* Optional: Set background position */
            background-position: center; /* Options include top, bottom, left, right, or specific percentages */
            /* Optional: Repeat behavior */
            background-repeat: no-repeat; /* Options: repeat, repeat-x, repeat-y, no-repeat */
            /* Optional: Height to make the example noticeable */
            height: 100vh; /* Full viewport height */
    margin: 100px;
    padding: 50px;
}

h2 {
    text-align: center;
    color: white;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background: transperent;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.62);
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #66afe9;
    outline: none;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #66afe9;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}
</style>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="">
        <input type="text" name="username" required placeholder="Username" />
        <input type="email" name="email" required placeholder="Email" />
        <input type="password" name="password" required placeholder="Password" />
        <button type="submit">Login</button>
    </form>
</body>
</html>