<?php 
	include "DB_connection.php";
	include "function.php";

//checking the inputs and save to variable-->
if (isset($_POST['buynow'])) {
		$matchid = $_POST['matchid']
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		// $userid = $_POST['userid'];
		$category = $_POST['category'];
		// $repeat_password = $_POST['repeat_password'];
	}

else{
	header("location: signup.php");
}
