<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh; /* Ensure body takes full height for proper layout */
            background-image:url('voting.jpg');
        }

        .sidebar {
            width: 250px; /* Increased width for more space, if necessary */
            height: 100vh; /* Full height of the viewport */
            background-color: #333; /* Dark background */
            color: white;
            padding: 20px;
            position: fixed; /* Fix the sidebar to the left */
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.5); /* Optional shadow effect */
            overflow-y: auto; /* Enable scrollbar if content exceeds height */
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px; /* Space between title and links */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0; /* Adjusted margin for spacing */
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px 15px; /* Add some padding for better hit area */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .sidebar ul li a:hover {
            background-color: #575757; /* Change background on hover */
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 300px; /* Match the sidebar width */
            padding: 20px;
            flex-grow: 1;
            background-color: #f4f4f4; /* Light background for main content */
            min-height: 100vh; /* Full height of the viewport */
            overflow-y: auto; /* Enable scrollbar if content exceeds height */
        }

        .main-content h1 {
            margin-top: 0; /* Remove default margin */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%; /* Full width on mobile */
                height: auto; /* Auto height for mobile */
                position: relative; /* Relative positioning for mobile */
            }

            .main-content {
                margin-left: 0; /* Remove sidebar margin on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="admin.php"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="change-password.php"><i class="fas fa-key"></i> Change Password</a></li>
            <li><a href="manage-details.php"><i class="fas fa-cogs"></i> Manage Details</a></li>
            <li><a href="student-details.php"><i class="fas fa-user-graduate"></i> Student Details</a></li>
            <li><a href="view-results.php"><i class="fas fa-file-alt"></i> View Results</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>Welcome, Admin!</h1>
        <!-- Add your content here. For example: -->
        <p>Your Profile Information:</p>
        <!-- Example for displaying profile information -->
    </div>
</body>
</html>