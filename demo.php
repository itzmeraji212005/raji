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
    <title>Online College Voting</title>
    <link rel="stylesheet" href="demo1.css">  <!-- Link to your CSS file -->
    <!-- Add any other necessary meta tags and links (e.g., for fonts) -->
</head>
<body>

    <?php echo generateNavbar(); ?>

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Welcome to Online College Voting!
                </h1>
                <p class="subtitle">
                    Your voice, your vote, our future.
                </p>
                <div class="quotes">
                    <?php
                    $quotes = [
                        "“The ballot is stronger than the bullet.” - Abraham Lincoln",
                        "“Democracy cannot succeed unless those who express their choice vote. ” - James Bryce",
                        "“Voting is the most basic right and responsibility of a citizen.” -  George W. Bush",
                        "“Elections belong to the people. It’s their decision. If they decide to turn their back on the fire and burn their behinds, then they will just have to sit on their blisters.” - Abraham Lincoln"
                    ];
                    $randomQuote = $quotes[array_rand($quotes)];
                    echo "<p class='quote'>\"" . $randomQuote . "\"</p>";
                    ?>
                </div>

                <div class="visual">
                    <img src="v.png" alt="Voting Image" style="width: 120%; max-width: 1000px; border-radius: 8px;">  <!-- Replace with your image -->
                </div>
            </div>
        </div>
    </section>
    <?php include('textoverimage.php')
    ?>
   <div class="vote-container">
    <h1>Let's Vote!</h1>
    <p>Your voice matters. Click the button below to cast your vote.</p>
    <a href="vote1.php" class="vote-button">Vote Now</a>
</div>


    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                &copy; <?php echo date("Y"); ?> Online College Voting. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>