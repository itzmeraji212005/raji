<?php
$candidates = [
    ['position' => 'Chairman', 'name' => 'Tamil', 'year' => '3rd Year', 'picture' => 'person1.jpg'],
    ['position' => 'Chairman', 'name' => 'Gowsi', 'year' => '2nd Year', 'picture' => 'person3.jpg'],
    ['position' => 'Chairman', 'name' => 'Abdul', 'year' => '3rd Year', 'picture' => 'person2.png'],
    ['position' => 'Vice Chairman', 'name' => 'Jeeva', 'year' => '3rd Year', 'picture' => 'person5.jpg'],
    ['position' => 'Vice Chairman', 'name' => 'Kiruba', 'year' => '3rd Year', 'picture' => 'person4.jpg'],
    ['position' => 'Secretary', 'name' => 'Kumar', 'year' => '3rd Year', 'picture' => 'person7.jpg'],
    ['position' => 'Secretary', 'name' => 'Vikas', 'year' => '2nd Year', 'picture' => 'person6.jpg'],
    ['position' => 'Joint Secretary', 'name' => 'Raji', 'year' => '3rd Year', 'picture' => 'raji.png'],
    ['position' => 'Joint Secretary', 'name' => 'Anu', 'year' => '3rd Year', 'picture' => 'person9.jfif'],
    ['position' => 'President', 'name' => 'Arun', 'year' => '3rd Year', 'picture' => 'per10.jpg'],
    ['position' => 'President', 'name' => 'Kavin', 'year' => '2nd Year', 'picture' => 'person11.jpg'],
    ['position' => 'Vice President', 'name' => 'Manju', 'year' => '2nd Year', 'picture' => 'women.avif'],
    ['position' => 'Union Advisor', 'name' => 'Saravanan', 'year' => '3rd Year', 'picture' => 'person12.jpg'],
    ['position' => 'Sports Secretary', 'name' => 'Alex', 'year' => '3rd Year', 'picture' => 'person13.avif'],
    ['position' => 'Sports Secretary', 'name' => 'Siva', 'year' => '3rd Year', 'picture' => 'person14.jpg'],
    ['position' => 'Sports Secretary', 'name' => 'Abinash', 'year' => '2nd Year', 'picture' => 'person15.avif'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 20px auto;
    text-align: center;
}

h1 {
    color: #333;
}

.candidates {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
    margin: 15px;
    padding: 20px;
    width: 250px;
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

.candidate-image {
    width: 100%;
    border-radius: 8px 8px 0 0;
}

h2 {
    font-size: 1.5em;
    margin: 10px 0;
}

p {
    color: #666;
}

.view-more {
    background-color: #007BFF;
    border: 0;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    padding: 10px 15px;
    font-size: 1em;
    margin-top: 10px;
    transition: background-color 0.3s;
}

.view-more:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="container">
        <h1>Candidates List</h1>
        <div class="candidates">
            <?php foreach ($candidates as $candidate): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($candidate['picture']); ?>" alt="<?= htmlspecialchars($candidate['name']); ?>" class="candidate-image">
                    <h2><?= htmlspecialchars($candidate['name']); ?></h2>
                    <p><strong>Position:</strong> <?= htmlspecialchars($candidate['position']); ?></p>
                    <p><strong>Year:</strong> <?= htmlspecialchars($candidate['year']); ?></p>
                    <button class="view-more" onclick="viewMore('<?= htmlspecialchars($candidate['name']); ?>')">View More</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function viewMore(name) {
            window.location.href = 'view_more_candidates.php?name=' + encodeURIComponent(name);
        }
    </script>
</body>
</html>