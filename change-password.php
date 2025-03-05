<?php
session_start();
$conn = new mysqli("localhost", "username", "password", "project"); // Update with your database credentials

// Redirect to login if not logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Verify old password
    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = 'admin' AND password = ?");
    $stmt->bind_param("s", $old_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update with the new password
        $stmt = $conn->prepare("UPDATE admin_users SET password = ? WHERE username = 'admin'");
        $stmt->bind_param("s", $new_password);
        $stmt->execute();
        $success = "Password successfully updated!";
		echo '<script>
		window.location.href="admindash.php";
		alert("Admin password changed Successfully")</script>';
		exit(); 
    } else {
        $error = "Old password is incorrect!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<style>
	/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px; /* Fixed width for form */
}

h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="password"]:focus {
    border-color: #007BFF;
    outline: none; /* Removes the default outline */
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #218838;
}

p {
    text-align: center;
    margin-top: 10px;
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    text-decoration: underline;
}

.error, .success {
    text-align: center;
    margin-top: 10px;
    font-weight: bold;
}

.error {
    color: red;
}

.success {
    color: green;
}
</style>
<body>
    <form method="POST" action="">
        <input type="password" name="old_password" placeholder="Old Password" required>
        <input type="password" name="new_password" placeholder="New Password" required>
        <input type="submit" value="Change Password" >
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p style='color:green;'>$success</p>"; } ?>
</form>
</body>
</html>