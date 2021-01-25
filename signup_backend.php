<?php 
	include "DB_connection.php";
	include "function.php";

//checking the inputs and save to variable-->
if (isset($_POST['signup'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		// $userid = $_POST['userid'];
		$password = $_POST['password'];
		$repeat_password = $_POST['repeat_password'];
	}

else{
	header("location: signup.php");
}


//checking passward error-->
 if (passwardMatch($password,$repeat_password) == false) {
 		header("location: signup.php?error=passwardMissMatch");
 		exit();
 }


//checking username exist or not error-->
 if (emailexist($connected, $email) !== false) {

 		header("location: signup.php?error=emailexist");
 		exit();
 	 }



$sql = "INSERT INTO user (email, name, password, phone) VALUES (?, ?, ?, ?);";

$stmt = mysqli_stmt_init($connected);

if (!mysqli_stmt_prepare($stmt, $sql)) { 
	header("location: signup.php?error=stmtfailed02");

	exit();
}


// if(!mysqli_query($connected, $sql)){

// 	header("location: index.php?error=none");

// 	exit();

// }
// else{
// 	echo "there must be some error";
// }

$hashedpass = password_hash($password, PASSWORD_DEFAULT);
 
mysqli_stmt_bind_param($stmt, "ssss",$email, $name, $hashedpass,  $phone); 
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location: index.php");
exit();

