<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="">
		<label>First Name:</label><br>
		<input type="text" name="first_name" required><br><br>
		
		<label>Last Name:</label><br>
		<input type="text" name="last_name" required><br><br>
		
		<label>Email Address:</label><br>
		<input type="email" name="email" required><br><br>
		
		<label>Password:</label><br>
		<input type="password" name="password" required><br><br>
		
		<label>Confirm Password:</label><br>
		<input type="password" name="confirm_password" required><br><br>
		
		<input type="submit" name="submit" value="Register">
	</form>
</body>

<?php

if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	
	$errors = array();
	
	if(empty($first_name)){
		$errors[] = "First name is required";
	}
	
	if(empty($last_name)){
		$errors[] = "Last name is required";
	}
	
	if(empty($email)){
		$errors[] = "Email address is required";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors[] = "Invalid email format";
	}
	
	if(empty($password)){
		$errors[] = "Password is required";
	}
	
	if(empty($confirm_password)){
		$errors[] = "Confirm password is required";
	}
	
	if($password != $confirm_password){
		$errors[] = "Passwords do not match";
	}
	
	if(empty($errors)){
		
		echo "Registration successful!";
		exit();
	}
	else{
	
		foreach($errors as $error){
			echo "<p style='color:red;'>".$error."</p>";
		}
	}
}
?>
