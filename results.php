<?php
session_start();

// Check if there are any votes
if (!isset($_SESSION['votes']) || empty($_SESSION['votes'])) {
    echo "<h1>No votes have been cast.</h1>";
    echo "<a href='vote.php' class='btn'>Back to voting</a>";
    exit;
}

// Display voting results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }
        li {
            margin: 10px 0;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s;
        }
        li:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Voting Results</h1>
    <ul>
        <?php
        foreach ($_SESSION['votes'] as $position => $name) {
            echo "<li><strong>$position:</strong> $name</li>";
        }
        ?>
    </ul>
    <a href="demo.php" class="btn">Exit</a>
</body>
</html>