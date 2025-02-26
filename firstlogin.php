
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div id="form">
			<h1>Login Form</h1>
			<form name="form" action="login.php"
				onsubmit="return invalid()"method="POST">
				<label>UserName</label>
				<input type="text" id="user" name="user"></br></br>
				<label>Password</label>
				<input type="password" id="pass" name="pass"></br></br>
				<input type="submit" id="btn" value="login" name="submit">
			</form>
		</div>
	</center>
</body>
</html>