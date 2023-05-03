<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
	$first_name = $_POST['first_name'];
	$middle_name = $_POST["middle_name"];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];

	// Hash the password before storing in the database
	$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
	$hashed_confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);

	$result = User::register($first_name, $middle_name, $last_name, $email, $hashed_pass, $hashed_confirm_password, $birthdate, $gender, $address, $contact_number);

	

	if ($result) {

		// Set the logged in session variable and redirect user to index page

		$_SESSION['is_logged_in'] = true;
		$_SESSION['user'] = [
			'id' => $result,
			'fullname' => $first_name ,
			'email' => $email
		];
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

