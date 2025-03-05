<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<style>

html, body {
    margin: 10px;
    height: 100%;
    overflow: hidden;
}

.video-background {
    position: relative;
    height: 100%;
    width: 100%;
    overflow: hidden;
}

video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
}

.content {
    position: relative;
    z-index: 1; /* Ensure the text is above the video */
    color: white; /* Text color */
    text-align: center; /* Center the content */
    padding: 20px; /* Add some padding */
}

h1 {
    font-size: 3em; /* Size of the header */
    margin: 0; /* Remove default margin */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Add shadow for better readability */
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
</style>
<body>
<div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="profile.php">Profile</a>
        <a href="change-password.php">Change Password</a>
        <a href="manage_details.php">Manage Details</a>
        <a href="view_results.php">View Results</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="voteback.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>Welcome to the Admin Page</h1>
        </div>
    </div>
</body>
</html>