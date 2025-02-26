<!DOCTYPE html>
<html>
<head>
    <title>Member Positions Voting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color:#ff0099;
            margin-top: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        button {
            background-color:#ff0099;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:#ff0099;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color:#ff0099;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            width: 50px;
            height: auto;
            border-radius: 50%;
        }

        .sub {
            text-align: center;
            margin-top: 20px;
        }

        p {
            text-align: center;
            font-size: 50px;
            color:
            
        }

        .home-button {
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>
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
        $conn = new mysqli('localhost', 'root1', 'raji', 'project');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Members array
        // (Note: This could also come from the database)
        $members = [
            // Member details
            ['position' => 'Chairman', 'name' => 'Tamil', 'year' => '3rd Year'],
            ['position' => 'Chairman', 'name' => 'Gowsi', 'year' => '2nd Year'],
            ['position' => 'Chairman', 'name' => 'Abdul', 'year' => '3rd Year'],
            ['position' => 'Vice Chairman', 'name' => 'Jeeva', 'year' => '3rd Year'],
            ['position' => 'Vice Chairman', 'name' => 'Kiruba', 'year' => '3rd Year'],
            ['position' => 'Secretary', 'name' => 'Kumar', 'year' => '3rd Year'],
            ['position' => 'Secretary', 'name' => 'Vikas', 'year' => '2nd Year'],
            ['position' => 'Joint Secretary', 'name' => 'Raji', 'year' => '3rd Year'],
            ['position' => 'Joint Secretary', 'name' => 'Anu', 'year' => '3rd Year'],
            ['position' => 'President', 'name' => 'Arun', 'year' => '3rd Year'],
            ['position' => 'President', 'name' => 'Kavin', 'year' => '2nd Year'],
            ['position' => 'Vice President', 'name' => 'Manju', 'year' => '2nd Year'],
            ['position' => 'Union Advisor', 'name' => 'Saravanan', 'year' => '3rd Year'],
            ['position' => 'Sports Secretary', 'name' => 'Alex', 'year' => '3rd Year'],
            ['position' => 'Sports Secretary', 'name' => 'Siva', 'year' => '3rd Year'],
            ['position' => 'Sports Secretary', 'name' => 'Abinash', 'year' => '2nd Year']
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['position'])) {
            $selectedPosition = $_POST['position'];

            // Only allow voting for Sports Secretary
            if ($selectedPosition === 'Sports Secretary') {
                $filteredMembers = array_filter($members, function($member) use ($selectedPosition) {
                    return $member['position'] === $selectedPosition;
                });

                if (count($filteredMembers) > 0) {
                    echo "<table>
                            <tr>
                                <th>Position</th>
                                <th>Name</th>
                                <th>Year</th>
                                <th>Picture</th>
                                <th>Vote</th>
                            </tr>";
                    foreach ($filteredMembers as $member) {
                        echo "<tr>
                                <td>{$member['position']}</td>
                                <td>{$member['name']}</td>
                                <td>{$member['year']}</td>
                                <td><img src='person1.jpg' alt='{$member['name']}'></td>
                                <td>
                                    <form method='post'>
                                        <input type='hidden' name='vote_position' value='{$member['position']}'>
                                        <input type='hidden' name='member_name' value='{$member['name']}'>
                                        <button type='submit'>Vote</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No members found for this position</p>";
                }
            } else {
                echo "<p>You can only vote for the Sports Secretary!</p>";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vote_position']) && isset($_POST['member_name'])) {
            $votePosition = $_POST['vote_position'];
            $memberName = $_POST['member_name'];

            // Logic for saving the vote goes here
            // For example: INSERT INTO votes (position, member_name) VALUES (?, ?)

            echo "<p>Thank you for voting for $memberName as $votePosition!</p>";
            echo "<form action='' method='post'><button type='submit' name='go_back'>Go Back to Home</button></form>";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['go_back'])) {
            // Reset the page or redirect to the main page
            header("Location:homepage.php");
            exit();
        }

        $conn->close();
        ?>
    </div>
</body>
</html>