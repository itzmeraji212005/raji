<?php
session_start();

if (!isset($_SESSION['votes'])) {
    header('Location: .php'); // Redirect if no votes are found
    exit;
}

// Here you can insert the voting results into another table

// For example, to display the results
echo "<h2>Thank you for voting!</h2>";
echo "<pre>" . print_r($_SESSION['votes'], true) . "</pre>";

// Clear session data
unset($_SESSION['votes']);
?>
<?php
session_start();

// Database connection
$host = 'localhost'; // adjust if necessary
$db = 'project';
$user = 'your_username'; // add your MySQL username
$pass = 'your_password'; // add your MySQL password

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['votes'])) {
    // Store votes in session
    $_SESSION['votes'] = $_POST['votes'];
    header('Location: successvote.php');
    exit;
}

// Fetch members data
$result = $conn->query("SELECT * FROM vote");
$members = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $members[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
    <style>
        /* Include your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>Vote for Candidates</h2>
        <form method="post" action="">
            <?php 
            $positions = [];
            foreach ($members as $member) {
                if (!in_array($member['position'], $positions)) {
                    $positions[] = $member['position'];
                    echo "<div class='position'>
                        <h3>{$member['position']}</h3>";
                        
                    foreach ($members as $candidate) {
                        if ($candidate['position'] === $member['position']) {
                            echo "<label class='candidate'>
                                <input type='radio' name='votes[{$member['position']}]' value='{$candidate['name']}' required>
                                <img src='{$candidate['picture']}' alt='{$candidate['name']}'> 
                                <span>{$candidate['name']}</span>
                            </label>";
                        }
                    }
                    
                    echo "</div>";
                }
            }
            ?>
            
        <button class="submit" type="submit">Submit Votes</button>
        <button class="view votes" onclick="window.location.href='thankvote.php'">View Votes</button>
        </form>
    </div>
</body>
</html>