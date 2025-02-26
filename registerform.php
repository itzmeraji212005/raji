<?php
$servername = "localhost"; // Change if your database server is different
$username = "root";         // Change as per your database login
$password = "";             // Change as per your database login
$dbname = "project";  // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regno = $_POST['regno'];
    $name = $_POST['name'];
    $dept_name = $_POST['dept_name'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO register (regno, name, dept_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $regno, $name, $dept_name); // 'sss' means all three are strings

    if ($stmt->execute()) {
        // Redirect to phpMyAdmin (adjust the URL if your phpMyAdmin is in a subdirectory)
        echo '<script>
            window.location.href="http://localhost/phpmyadmin";
        </script>';
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
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Registration Form</h2>
<form method="post" action="">
    <label for="regno">Registration Number:</label>
    <input type="text" id="regno" name="regno" required>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="dept_name">Department:</label>
    <select id="dept_name" name="dept_name" required>
        <option value="">Select Department</option>
        <option value="Dept of Tamil">Dept of Tamil</option>
        <option value="Dept of English">Dept of English</option>
        <option value="Dept of Maths">Dept of Maths</option>
        <option value="Dept of Computer application">Dept of Computer application</option>
        <option value="Dept of Computer Science">Dept of Computer Science</option>
        <option value="Dept of Physics">Dept of Physics</option>
        <option value="Dept of Chemistry">Dept of Chemistry</option>
        <option value="Dept of Zoology">Dept of Zoology</option>
        <option value="Dept of Visual Communication">Dept of Visual Communication</option>
        <option value="Dept of Data Science">Dept of Data Science</option>
    </select>

    <input type="submit" value="Register">
</form>
</body>
</html>