<?php
session_start();

// Check if votes exist
if (!isset($_SESSION['votes'])) {
    header('Location: votedemo.php');
    exit;
}

// Count votes
$votes = $_SESSION['votes'];
$results = array_count_values($votes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; }
        .back { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Voting Results</h2>
        <ul>
            <?php foreach ($results as $position => $name): ?>
                <li><?php echo htmlspecialchars($position) . ": " . htmlspecialchars($name); ?></li>
            <?php endforeach; ?>
        </ul>
        <a class="back" href="vote.php">Back to Voting</a>
    </div>
</body>
</html>