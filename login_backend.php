<?php 
	include "DB_connection.php";
	include "function.php";

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
	}

	else{
		header("location: login.php");
	}
  
	$emailexist = emailexist($connected, $email);
//user id check if exist or not
	if ($emailexist == false) {
		header("location: login.php?error=emailexist");
 		exit();
	}

	$hashedpassword = $emailexist["password"];
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword == false) {
		header("location: login.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {
		session_start();
		$_SESSION["email"] = $emailexist["email"];
		$_SESSION["name"] = $useridexist["name"];
		header("location: index.php");
 		exit();
	}