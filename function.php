<?php 
function passwardMatch($password, $repeat_password) { 
	$result;

	if ($password == $repeat_password) {
		$result = true;
	}

	else {
		$result = false; 
	}
	return $result;
}

function userIDexist($connection, $userid) {
	$sql = 'SELECT * FROM fans WHERE fan_id = ?;';
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: signup.php?error=stmtfailed01 ");
 		exit();
	}
	mysqli_stmt_bind_param($stmt, "i" , $userid);
	mysqli_stmt_execute($stmt);

	$resultdata = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultdata)) {
		return $row;
	}
	else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
	// $result = mysqli_query($connection, $sql);
	// $fans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// $result = false;
	// foreach ($fans as $fan) {
	// 	if($fan['fan_id'] == $user){
	// 		$result = true;
	// 		break;
	// 	}
	// }
	// return $result;
}