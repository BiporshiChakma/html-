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

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Get form data
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Check if both fields are filled out
	if (empty($email) || empty($password)) {
		$error = "Please enter both your email and password.";
	} else {
		// Check if email and password are correct
		// Replace this with your own validation code
		// For example, check if the email and password are in a database
		if ($email == "example@example.com" && $password == "password123") {
			// Redirect to welcome page
			header("Location: welcome.php?name=John");
			exit();
		} else {
			$error = "Invalid login credentials.";
		}
	}
}

?>

