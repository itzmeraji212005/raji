<?php
session_start();

// Members data
$members = [
    ['position' => 'Chairman', 'name' => 'Tamil', 'year' => '3rd Year', 'picture' => 'person1.jpg'],
    ['position' => 'Chairman', 'name' => 'Gowsi', 'year' => '2nd Year', 'picture' => 'person3.jpg'],
    ['position' => 'Chairman', 'name' => 'Abdul', 'year' => '3rd Year', 'picture' => 'person2.png'],
    ['position' => 'Vice Chairman', 'name' => 'Jeeva', 'year' => '3rd Year', 'picture' => 'person5.jpg'],
    ['position' => 'Vice Chairman', 'name' => 'Kiruba', 'year' => '3rd Year', 'picture' => 'person4.jpg'],
    ['position' => 'Secretary', 'name' => 'Kumar', 'year' => '3rd Year', 'picture' => 'person7.jfif'],
    ['position' => 'Secretary', 'name' => 'Vikas', 'year' => '2nd Year', 'picture' => 'person1.jpg'],
    ['position' => 'Joint Secretary', 'name' => 'Raji', 'year' => '3rd Year', 'picture' => 'person8.jfif'],
    ['position' => 'Joint Secretary', 'name' => 'Anu', 'year' => '3rd Year', 'picture' => 'person10.jpg'],
    ['position' => 'President', 'name' => 'Arun', 'year' => '3rd Year', 'picture' => 'person5.jpg'],
    ['position' => 'President', 'name' => 'Kavin', 'year' => '2nd Year', 'picture' => 'person7.jfif'],
    ['position' => 'Vice President', 'name' => 'Manju', 'year' => '2nd Year', 'picture' => 'person4.jpg'],
    ['position' => 'Union Advisor', 'name' => 'Saravanan', 'year' => '3rd Year', 'picture' => 'person5.jpg'],
    ['position' => 'Sports Secretary', 'name' => 'Alex', 'year' => '3rd Year', 'picture' => 'person7.jfif'],
    ['position' => 'Sports Secretary', 'name' => 'Siva', 'year' => '3rd Year', 'picture' => 'person1.jpg'],
    ['position' => 'Sports Secretary', 'name' => 'Abinash', 'year' => '2nd Year', 'picture' => 'person6.jfif']
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['votes'])) {
    // Store votes in session
    $_SESSION['votes'] = $_POST['votes'];
    header('Location: successvote.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .position {
        margin-bottom: 30px;
        border-bottom: 2px solid #eaeaea;
        padding-bottom: 20px;
    }
    .position h3 {
        color: #007bff;
        margin-bottom: 10px;
    }
    .candidate {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #eaeaea;
        border-radius: 5px;
        transition: background-color 0.3s;
        cursor: pointer; /* Change cursor to pointer */
    }
    .candidate:hover {
        background-color: #f0f8ff; /* Light background hover */
    }
    img {
        width: 80px; /* Slightly reduced size for better fit */
        height: auto;
        border-radius: 50%;
        margin-right: 15px;
        border: 2px solid #007bff; /* Border for image */
    }
    label {
        display: flex;
        flex: 1;
        align-items: center;
    }
    input[type="radio"] {
        margin-right: 10px;
        cursor: pointer; /* Change cursor to pointer */
    }
    .back, button {
        margin-top: 20px;
        display: inline-block;
        text-align: center;
        padding: 10px 15px;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button {
        background-color: #28a745; /* Green Background */
    }
    button:hover {
        background-color: #218838; /* Darker green on hover */
    }
    .view.votes {
        background-color: #007bff; /* Blue Background */
    }
    .view.votes:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
</style>
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
            
        <button class="submit" onclick="window.location.href="successvote.php">Submit Votes</button>
        <button class="view votes" onclick="window.location.href='thankvote.php'">View Votes</button>
        </form>
    </div>
</body>
</html>