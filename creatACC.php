<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<style>
		.username{
			border: 2px solid black;
		}
		.password{
			border: 2px solid black;
		}
	</style>
</head>
<?php
	include 'header.php';
?>
<body>
	<h2>Create a new account</h2>
	<form method="POST" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]+" title="Username can only contain letters and digits"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required minlength="4" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$" title="Password must be at least 4 characters long, have at least one letter and at least one digit"><br><br>
		<input type="submit" value="Create Account">
	</form>
</body>
<?php
	include 'footer.php';
?>
</html>
