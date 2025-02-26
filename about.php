<?php
session_start();

// Helper function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Helper function to generate the navigation bar
function generateNavbar() {
    $isLoggedIn = isLoggedIn();
    $navbar = '<nav class="navbar">';
    $navbar .= '<div class="container">';
    $navbar .= '<div class="navbar-brand">';
    $navbar .= '<a href="index.php" class="navbar-item">Online College Voting</a>';
    $navbar .= '</div>';
    $navbar .= '<div class="navbar-menu">';
    $navbar .= '<div class="navbar-start">';
    $navbar .= '<a href="index.php" class="navbar-item">Home</a>';
    $navbar .= '<a href="about.php" class="navbar-item">About</a>';
    $navbar .= '<a href="candidates.php" class="navbar-item">Candidates</a>';
    $navbar .= '<a href="voting.php" class="navbar-item">Voting</a>';
    $navbar .= '<a href="login.php" class="navbar-item">Login</a>';

    $navbar .= '</div>';
    $navbar .= '</div>';
    $navbar .= '</div>';
    $navbar .= '</nav>';
    return $navbar;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Online College Voting System</title>
</head>
<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background: #333;
    color: #fff;
    padding: 10px 0;
}

header h1 {
    text-align: center;
}

nav {
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

.about-section {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.about-section h2, .about-section h3 {
    color: #333;
}

footer {
    text-align: center;
    padding: 10px 0;
    background: #333;
    color: #fff;
    position: relative;
    bottom: 0;
    width: 100%;
}

@media (max-width: 600px) {
    nav ul li {
        display: block;
        margin: 5px 0;
    }
}
</style>
<body>
    <main>
        <section class="about-section">
            <h2>About Us</h2>
            <p>The Online College Voting System is an innovative solution designed to facilitate fair and transparent elections within our college community. We aim to empower every student with a voice, ensuring that everyone has the opportunity to participate in the democratic process.</p>
            <p>Our platform is user-friendly and secure, allowing voters to cast their votes from anywhere at any time. We prioritize privacy and security to protect the integrity of the voting process.</p>
            <h3>Our Mission</h3>
            <p>To enhance student engagement by providing an efficient and accessible online voting platform that promotes transparency and fairness in college elections.</p>
            <h3>Our Team</h3>
            <p>We are a dedicated team of developers and college administrators who are passionate about technology and student participation. Our goal is to continuously improve the platform and the voting experience for all users.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online College Voting System. All rights reserved.</p>
    </footer>
</body>
</html>