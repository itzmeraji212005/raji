<?php
// Sample data for the admin profile
$admin = [
    'name' => 'John Doe',
    'profile_picture' => 'person5.jpg' // Make sure to have this image in the same directory or specify the correct path
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 10px;
            padding: 0;
            background: linear-gradient(135deg, #00c6ff, #0072ff); /* Gradient background */
            background-size: 400% 400%; /* For animation effect */
            animation: gradientAnimation 10s ease infinite; /* Animation applied */
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #2d2d2d;
            padding: 20px 15px;
            position: fixed;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }

        .sidebar h2 {
            color: #f9f9f9;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            color: #f0f0f0;
            border-radius: 5px;
            display: block;
            margin: 10px 0;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main {
            margin-left: 240px;
            padding: 20px;
            background-color: #ffffff;
            min-height: 100vh;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .profile-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #007BFF;
            margin-bottom: 15px;
            transition: transform 0.3s;
        }

        .profile-picture:hover {
            transform: scale(1.05);
        }

        .admin-name {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
            font-weight: 600;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-top: 10px;
            color: #666;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #2d2d2d;
            color: #f9f9f9;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="profile.php">Profile</a>      
        <a href="change-password.php">Change Password</a>
        <a href="manage_details.php">Manage Details</a>
        <a href="view_results.php">View Results</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="main">
        <h2>Welcome to the Admin Panel</h2>
        <div class="profile-container">
            <img src="<?php echo htmlspecialchars($admin['profile_picture']); ?>" alt="Profile Picture" class="profile-picture">
            <h1 class="admin-name"><?php echo htmlspecialchars($admin['name']); ?></h1>
        </div>
        <div class="container">
            <p>
                Welcome to the admin panel of the Online Voting System. Here, you can manage voting events, view results, and ensure the smooth operation of the voting process. This platform enables you to oversee votes efficiently and maintain the integrity of the election process.
            </p>
        </div>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Online Voting System
    </footer>
</body>
</html>