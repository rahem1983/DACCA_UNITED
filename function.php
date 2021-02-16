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

function emailexist($connection, $email) {
	$sql = 'SELECT * FROM user WHERE email = ?;';
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: signup.php?error=stmtfailed01 ");
 		exit();
	}
	mysqli_stmt_bind_param($stmt, "s" , $email);
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
function ticketavailable($connection, $matchid){
	$sql= 'SELECT MatchID FROM matches where (CURRENT_DATE < matches.date and hometeam = "Dacca United")ORDER BY matches.date';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($ticket = mysqli_fetch_array($result)) {
		if ($ticket['MatchID']==$matchid) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}

}


function playeridexist($connection, $playerid) {
	$sql = 'SELECT PlayerID FROM players ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($player = mysqli_fetch_array($result)) {
		if ($player['PlayerID']==$playerid) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}
}

function productidexist($connection, $productid) {
	$sql = 'SELECT productID FROM product ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($player = mysqli_fetch_array($result)) {
		if ($player['productID']==$productid) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}
}

function customeremailexist($connection, $email) {
	$sql = 'SELECT email FROM customer ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0; 

	while ($player = mysqli_fetch_array($result)) {
		if ($player['email']==$email) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}
}