<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Candidate Page</title>
    <link rel="stylesheet" href="candidates.css">
    <style>
       
       .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; 
    padding: 20px;
    border: 1px solid #888;
    width: 50%; 
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
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>St. Mary's College, Palayamkottai</h1>
            <h2 style="text-align:center;">Student Council Election 2025</h2>
        </div>
    </header>
    
    <main>
        <h1>Member Positions</h1>
        <form method="post">
            <button type="submit" name="position" value="Chairman">Chairman</button>
            <button type="submit" name="position" value="Vice Chairman">Vice Chairman</button>
            <button type="submit" name="position" value="Secretary">Secretary</button>
            <button type="submit" name="position" value="Joint Secretary">Joint Secretary</button>
            <button type="submit" name="position" value="President">President</button>
            <button type="submit" name="position" value="Vice President">Vice President</button>
            <button type="submit" name="position" value="Union Advisor">Union Advisor</button>
            <button type="submit" name="position" value="Sports Secretary">Sports Secretary</button>
        </form>
        
        <div class="sub">
            <?php
            // Define the member data
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['position'])) {
    $selectedPosition = $_POST['position'];

    // Filter members based on the selected position
    $filteredMembers = array_filter($members, function($member) use ($selectedPosition) {
        return $member['position'] === $selectedPosition;
    });

    if (count($filteredMembers) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Picture</th>
                </tr>";
        $count = 0;
        foreach ($filteredMembers as $member) {
            if ($count >= 6) break;  // Limit to 6 entries
            // Add data attributes for candidate details
            echo "<tr data-name='{$member['name']}'
                       data-year='{$member['year']}'
                       data-picture='{$member['picture']}'>
                    <td>{$member['position']}</td>
                    <td>{$member['name']}</td>
                    <td>{$member['year']}</td>
                    <td><img src='{$member['picture']}' alt='{$member['name']}' style='width:50px;height:50px;'></td>
                  </tr>";
            $count++;
        }
        echo "</table>";
    } else {
        echo "<p>No members found for this position</p>";
    }
}
?>
<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Candidate Details</h2>
        <img id="modal-image" src="" alt="Candidate Image" style="width:50px; height:50px;">
        <p><strong>Name:</strong> <span id="modal-name"></span></p>
        <p><strong>Year:</strong> <span id="modal-year"></span></p>
    </div>
</div>
<script>
    // Get modal
    var modal = document.getElementById("modal");

    // Get span element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Add event listener for table rows
    document.querySelectorAll("tr[data-name]").forEach(row => {
        row.addEventListener("click", function() {
            // Populate modal with candidate details
            document.getElementById("modal-name").innerText = row.getAttribute('data-name');
            document.getElementById("modal-year").innerText = row.getAttribute('data-year');
            document.getElementById("modal-image").src = row.getAttribute('data-picture');
            
            // Show the modal
            modal.style.display = "block";
        });
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>