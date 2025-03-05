<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize votes
    if (!isset($_SESSION['votes'])) {
        $_SESSION['votes'] = [];
    }

    // Clear previous votes if required - Uncomment if you want to allow only one vote per position
    // $_SESSION['votes'] = [];

    foreach ($_POST as $position => $name) {
        // Ensure that the name is not empty and the position is a valid category
        if (!empty($name)) {
            $_SESSION['votes'][$position] = htmlspecialchars($name); // Sanitize the input
        }
    }

    // Redirect to results page
    header('Location: results.php');
    exit;
} else {
    // Redirect to vote page if accessed without a post request
    header('Location: vote.php');
    exit;
}