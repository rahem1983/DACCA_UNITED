<?php 
	include "DB_connection.php";
	include "function.php";

	if (isset($_POST['login'])) {
		$userid = $_POST['userid'];
		$password = $_POST['password'];
	}

	else{
		header("location: login.php");
	}
  
	$useridexist = userIDexist($connected, $userid);
//user id check if exist or not
	if ($useridexist == false) {
		header("location: login.php?error=useridexist");
 		exit();
	}

	$hashedpassword = $useridexist["password"];
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword == false) {
		header("location: login.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {
		session_start();
		$_SESSION["fanid"] = $useridexist["fan_id"];
		$_SESSION["fanname"] = $useridexist["name"];
		header("location: index.php");
 		exit();
	}