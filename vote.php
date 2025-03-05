<?php
$candidatesData = [
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

// Group candidates by position
$candidates = [];
foreach ($candidatesData as $candidate) {
    $candidates[$candidate['position']][] = $candidate;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote for Candidates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center horizontally */
            margin: 0 auto;
            max-width: 800px; /* Centering the form */
        }

        .candidate {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            border-radius: 5px;
            display: inline-block;
            width: 200px;
            text-align: center;
            transition: transform 0.2s; /* Adding smooth transition effect */
            cursor: pointer; /* Indicate clickable */
        }

        .candidate:hover {
            transform: scale(1.05); /* Slight zoom on hover */
        }

        .candidate img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s; /* Adding transition for the button */
        }

        button:hover {
            background-color: #218838;
        }

        h2 {
            margin-top: 20px;
            text-align: center; /* Align heading to center */
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            max-width: 600px; /* Max width for modal */
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Vote for Your Candidates!</h1>
    <form action="submit_vote.php" method="POST" class="form-container">
        <?php
        foreach ($candidates as $position => $candidatesList) {
            echo "<h2>$position</h2>";
            echo "<div style='display: flex; justify-content: center; flex-wrap: wrap;'>"; // Center candidates
            foreach ($candidatesList as $candidate) {
                echo "<div class='candidate' onclick=\"openModal('{$candidate['name']}', '{$candidate['picture']}', '{$candidate['year']}')\">";
                echo "<img src='{$candidate['picture']}' alt='{$candidate['name']}'>";
                echo "<p>{$candidate['name']} - {$candidate['year']}</p>";
                echo "<input type='radio' name='{$candidate['position']}' value='{$candidate['name']}' required>";
                echo "</div>";
            }
            echo "</div>"; // Closing the div for center alignment of candidates
        }
        ?>
        <button type="submit">Submit Vote</button>
    </form>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle">Candidate Information</h2>
            <img id="modalImage" src="" alt="" />
            <p id="modalYear"></p>
        </div>
    </div>

    <script>
        function openModal(name, picture, year) {
            document.getElementById("modalTitle").textContent = name;
            document.getElementById("modalImage").src = picture;
            document.getElementById("modalYear").textContent = year;
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        // Close the modal if the user clicks anywhere outside of it
        window.onclick = function(event) {
            var modal = document.getElementById('myModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>