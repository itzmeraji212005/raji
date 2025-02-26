<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Voter Category</title>    
    <link rel="stylesheet" type="text/css" href="add new voter.css">
</head>
<body>
<h1>Add New Voter Category</h1>
<form id="voterForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="department">Department:</label>
    <select id="department" name="department" required>
        <option value="Dept of Tamil">Dept of Tamil</option>
						<option value="Dept of English">Dept of English</option>
						<option value="Dept of Maths">Dept of Maths</option>
						<option value="Dept of Computer application">Dept of Computer application</option>
						<option value="Dept of Science">Dept of Computer Science</option>
						<option value="Dept of Physics">Dept of Physics</option>
						<option value="Dept of Chemistry">Dept of Chemistry</option>
						<option value="Dept of Zoology">Dept of Zoology</option>
						<option value="Dept of Visual Communication">Dept of Visual Communication</option>
						<option value="Dept of Data Science">Dept of Data Science</option>
    </select>
    <label for="position">Position:</label>
    <select id="position" name="position" required>
        <option value="">Select Position</option>
        <option value="Chairman">President</option>
        <option value="Vice president">Vice president</option>
        <option value="Secretary">Secretary</option>
        <option value="Join Secretary">Join Secretary</option>
        <option value="Secretary">Secretary</option>

    </select>

    <label for="picture">Upload Picture:</label>
    <input type="file" id="picture" name="picture" accept="image/*" required>

    <button type="submit">Save</button>
</form>

<div id="confirmation" style="margin-top: 20px; display: none;">
    <h2>Voter Category Added!</h2>
    <p id="summary"></p>
</div>

<script>
    document.getElementById('voterForm').addEventListener('submit', function(event){
        event.preventDefault(); // Prevent the default form submission
        
        // Get form data
        const name = document.getElementById('name').value;
        const department = document.getElementById('department').value;
        const position = document.getElementById('position').value;

        // Fetch the uploaded file and URL (assuming you want to display this)
        const fileInput = document.getElementById('picture');
        const file = fileInput.files[0];
        const fileUrl = file ? URL.createObjectURL(file) : '';

        // Display confirmation summary
        document.getElementById('summary').innerHTML = `
            Name: ${name} <br>
            Department: ${department} <br>
            Position: ${position} <br>
            Picture: <img src="${fileUrl}" alt="Uploaded Picture" style="max-width:100px;"/>
        `;
        document.getElementById('confirmation').style.display = 'block';

        // Here you can add a function to save the data to your database or API.
        // E.g., send data to a server using fetch.
    });
</script>

</body>
</html>
