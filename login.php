<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login</h2>
	<form method="post" action="login.php">
		<label for="email">Email address:</label>
		<input type="email" name="email" id="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$email = $_POST["email"];
	$password = $_POST["password"];


	if (empty($email) || empty($password)) {
		$error = "Please enter both your email and password.";
	} else {
		
		if ($email == "example@example.com" && $password == "password123") {
	
			header("Location: welcome.php?name=John");
			exit();
		} else {
			$error = "Invalid login credentials.";
		}
	}
}

?>

