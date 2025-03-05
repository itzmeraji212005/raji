<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online College Voting System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FDE6B3;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .button {
            display: block;
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            position: relative;
        }
        .student-button {
            background-color: #D81B60;
        }
        .staff-button {
            background-color: #007E33;
        }
        .icon {
            display: block;
            margin: 0 auto 10px;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    <h1>Online College Voting System</h1>
    <div class="container">
        <a href="login.php" class="button student-button">
            <img src="student-icon.png" alt="Student Icon" class="icon">
            STUDENT LOGIN
        </a>
        <a href="adminlogin.php" class="button staff-button">
            <img src="staff-icon.png" alt="Staff Icon" class="icon">
            ADMIN LOGIN
        </a>
    </div>
</body>
</html>
