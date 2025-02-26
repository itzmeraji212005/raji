<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Model - Image and Text</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Box Styles */
        .box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 70px; /* Add some spacing between boxes */
            overflow: hidden; /* Ensure that floats don't cause container to collapse */
        }

        /* Image and Text Layout - Right Image, Left Text */
        .right-image-box .image-container {
            float: right;
            width: 40%; /* Adjust as needed */
        }

        .right-image-box .text-container {
            float: left;
            width: 60%; /* Adjust as needed */
            padding: 20px;
            box-sizing: border-box; /* Include padding in width */
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block; /* Remove extra spacing below the image */
        }

        /* Image and Text Layout - Left Image, Right Text */
        .left-image-box .image-container {
            float: left;
            width: 40%; /* Adjust as needed */
        }

        .left-image-box .text-container {
            float: right;
            width: 60%; /* Adjust as needed */
            padding: 30px;
            box-sizing: border-box; /* Include padding in width */
        }


        /* Clearfix for ensuring containers contain their floated children */
        .box::after {
            content: "";
            display: table;
            clear: both;
        }

        .text-container h2 {
            margin-top: 0;
        }

        /*Button styles*/
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Responsive Design (example) */
        @media (max-width: 768px) {
            .right-image-box .image-container,
            .right-image-box .text-container,
            .left-image-box .image-container,
            .left-image-box .text-container {
                float: none; /* Remove floats on smaller screens */
                width: 100%; /* Make them take full width */
            }

            .image-container img {
                width: 100%;  /* Make sure the image fills the space */
                height: auto;
            }

            .right-image-box .text-container,
            .left-image-box .text-container {
                padding: 15px;  /* Adjust padding for smaller screens */
            }
        }
    </style>
</head>
<body>

    <div class="container">


        <div class="box right-image-box">
            <div class="image-container">
                <img src="a.jpg" alt="Right Image">  <!-- Replace with your image source -->
            </div>
            <div class="text-container">
                <h2>Importance of Online voting</h2>
                <p>The importance of an online college voting system cannot be overstated, as it promotes greater student engagement, accessibility, and efficiency in the electoral process.
                Additionally, an online system often streamlines the tabulation process, reducing the time and resources needed to tally votes and leading to quicker results.
                </p>
            </div>
        </div>

        <!-- Left Image, Right Text -->
        <div class="box left-image-box">
            <div class="image-container">
                <img src="vote2.jpg" alt="Left Image"> <!-- Replace with your image source -->
            </div>
            <div class="text-container">
                <h2>Benifits of Online Voting</h2>
                <p> An online college voting system offers numerous benefits that enhance the electoral process within educational institutions.
                Online voting can enhance security through encryption and authentication measures, ensuring that each vote is cast and counted accurately
                </p>
            </div>
        </div>
        <div class="box right-image-box">
            <div class="image-container">
                <img src="https://th.bing.com/th/id/OIP.8y4MT4biP96ZvIXEDl43sgHaEV?w=275&h=180&c=7&r=0&o=5&pid=1.7" alt="Right Image">  <!-- Replace with your image source -->
            </div>
            <div class="text-container">
                <h2>Advantages of Online voting</h2>
                <p>An online voting system enhances accessibility and convenience, allowing voters to cast their ballots from anywhere, which can significantly increase participation rates. Additionally, it streamlines the voting process, reduces administrative burdens, and ensures quicker, more secure counting of votes, ultimately fostering greater engagement and transparency in elections.</P>
            </div>
        </div>
        <div class="box left-image-box">
            <div class="image-container">
                <img src="https://th.bing.com/th?id=OIP.90YaUEyK-YX6A2W_Y3WZvQHaFj&w=288&h=216&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="Left Image"> <!-- Replace with your image source -->
            </div>
            <div class="text-container">
                <h2>Key features of Online Voting</h2>
                <p> An online voting system typically includes key features such as secure user authentication to verify voter identities, ensuring that only eligible participants can cast their votes. Additionally, it offers real-time ballot tracking and immediate result computation, enhancing transparency and providing a swift overview of election outcomes while maintaining the confidentiality of individual votes.
                </p>
            </div>
        </div>


    </div>

</body>
</html>