<?php
// Sample details for demo purposes
$candidateDetails = [
    'Tamil' => [
        'details' => '

        I am excited to announce my candidacy for the position of Chairman.
        I believe that together, we can make a positive impact on our college community.
        If elected, I promise to listen to your ideas and work hard to make our college a better place for everyone.
        Let\'s work together to create a brighter future!',
        'year' => '3rd Year',
        'position' => 'Chairman',
        'picture' => 'person1.jpg'
    ],
        'Gowsi' => [
            'details' => '
            I am excited to announce my candidacy for the position of Chairman.
            I believe that together, we can make a positive impact on our college community.
            If elected, I promise to listen to your ideas and work hard to make our college a better place for everyone.
            Let\'s work together to create a brighter future!',
            'year' => '2nd Year',
            'position' => 'Chairman',
            'picture' => 'person3.jpg'
        ],
        'Abdul' => [
            'details' => '
            I am thrilled to present myself as a candidate for the position of Chairman.
            Your voice matters, and I will ensure that it is heard. Together, we can overcome challenges and seize opportunities for our college.
            Let’s collaborate for a successful year ahead!',
            'year' => '3rd Year',
            'position' => 'Chairman',
            'picture' => 'person2.png'
        ],
        'Jeeva' => [
            'details' => '
            I am running for the position of Vice Chairman to bring new ideas and initiatives that can greatly enhance our college experience.
            With your support, we can foster unity and creativity within our student body. 
            Let’s achieve greatness together!',
            'year' => '3rd Year',
            'position' => 'Vice Chairman',
            'picture' => 'person5.jpg'
        ],
        'Kiruba' => [
            'details' => '
            My ambition is to serve as your Vice Chairman and work tirelessly for the betterment of our community.
            I am here to represent your interests and promote inclusivity within our college.
            Together, we can do amazing things!',
            'year' => '3rd Year',
            'position' => 'Vice Chairman',
            'picture' => 'person4.jpg'
        ],
        'Kumar' => [
            'details' => '
            I am honored to run for the position of Secretary.
            I will dedicate myself to ensuring that the voices of all students are heard and respected.
            Let’s work collaboratively to enhance our college experience!',
            'year' => '3rd Year',
            'position' => 'Secretary',
            'picture' => 'person7.jpg'
        ],
        'Vikas' => [
            'details' => '
            I am excited to announce my candidacy for the position of Secretary.
            I aim to bridge the gap between students and administration to foster a supportive environment.
            Together, let’s make our college a thriving place!',
            'year' => '2nd Year',
            'position' => 'Secretary',
            'picture' => 'person6.jpg'
        ],
        'Raji' => [
            'details' => '
            I am proud to run for Joint Secretary. I believe that change starts with strong communication.
            My goal is to make your ideas and suggestions a priority. 
            Let’s work hand in hand for a better future!',
            'year' => '3rd Year',
            'position' => 'Joint Secretary',
            'picture' => 'raji.png'
        ],
        'Anu' => [
            'details' => '
            I am seeking the position of Joint Secretary to bring fresh perspectives and ensure every voice is heard.
            Together, we can create a collaborative and engaging environment.
            Your support means everything!',
            'year' => '3rd Year',
            'position' => 'Joint Secretary',
            'picture' => 'person9.jfif'
        ],
        'Arun' => [
            'details' => '
            As a candidate for President, I promise to create a more inclusive and dynamic college environment.
            Your concerns are my priorities. Together, we can achieve our goals and make a lasting impact!',
            'year' => '3rd Year',
            'position' => 'President',
            'picture' => 'per10.jpg'
        ],
        'Kavin' => [
            'details' => '
            I am excited to announce my candidacy for President. 
            I believe that with teamwork, we can make this college a place of innovation and growth.
            Let’s uplift each other and succeed together!',
            'year' => '2nd Year',
            'position' => 'President',
            'picture' => 'person11.jpg'
        ],
        'Manju' => [
            'details' => '
            I am running for Vice President to ensure every student has a voice in decision-making. 
            Together we can transform our college experience for the better. 
            Let’s make great things happen!',
            'year' => '2nd Year',
            'position' => 'Vice President',
            'picture' => 'women.avif'
        ],
        'Saravanan' => [
            'details' => '
            I am honored to serve as the Union Advisor. 
            My aim is to guide and support our students in all their endeavors. 
            Together, we can facilitate growth and development within our community!',
            'year' => '3rd Year',
            'position' => 'Union Advisor',
            'picture' => 'person12.jpg'
        ],
        'Alex' => [
            'details' => '
            I am excited to run for Sports Secretary.
            My goal is to promote sports and physical wellness among all students. 
            Let’s create a vibrant sports culture together!',
            'year' => '3rd Year',
            'position' => 'Sports Secretary',
            'picture' => 'person13.avif'
        ],
        'Siva' => [
            'details' => '
            I aspire to be your Sports Secretary. 
            My mission is to enhance sports opportunities for all students and build a strong team spirit. 
            Together, let’s make sports a focal point of college life!',
            'year' => '3rd Year',
            'position' => 'Sports Secretary',
            'picture' => 'person14.jpg'
        ],
        'Abinash' => [
            'details' => '
            I am running for Sports Secretary to promote inclusivity and participation in sports.
            I believe every student should have access to sports activities. 
            Let’s work together for an active lifestyle!',
            'year' => '2nd Year',
            'position' => 'Sports Secretary',
            'picture' => 'person15.avif'
        ],
];

$name = isset($_GET['name']) ? $_GET['name'] : null;
$candidateInfo = $name && isset($candidateDetails[$name]) ? $candidateDetails[$name] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 50px auto;
            width: 50%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1, h2 {
            font-size: 24px;
            font-weight: bold;
            color: black;
        }

        p {
            font-size: 18px;
            margin: 5px 0;
            color: black;
        }

        .candidate-image {
            width: 100px;
            height: 100px;
            margin-top: 10px;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: gray;
        }

        .activate-windows {
            position: fixed;
            bottom: 10px;
            right: 10px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($candidateInfo): ?>
            <h1>Candidate Details</h1>
            <div class="card">
                <img src="<?= htmlspecialchars($candidateInfo['picture']); ?>" alt="<?= htmlspecialchars($name); ?>" class="candidate-image">
                <h2><?= htmlspecialchars($name); ?></h2>
                <p><strong>Position:</strong> <?= htmlspecialchars($candidateInfo['position']); ?></p>
                <p><strong>Year:</strong> <?= htmlspecialchars($candidateInfo['year']); ?></p>
                <p><strong>Details:</strong> <?= nl2br(htmlspecialchars($candidateInfo['details'])); ?></p>
            </div>
        <?php else: ?>
            <h1>No Candidate Selected</h1>
        <?php endif; ?>
        <a href="candi.php" class="back-button">Back to Candidates List</a>
    </div>
</body>
</html>