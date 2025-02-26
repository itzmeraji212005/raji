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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #333;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main {
            margin-left: 220px;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .profile-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-top: 20px; /* Added margin top for better spacing */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #007BFF;
            margin-bottom: 15px;
        }

        .admin-name {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="change_password.php">Change Password</a>
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
    </div>
</body>
</html>