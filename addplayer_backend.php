<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if (isset($_POST['submit'])) {
		
			$name = $_POST['name'];
			$nation = $_POST['nation'];
			$age = $_POST['age'];
			$jerseyno = $_POST['jerseyno'];
			$salary = $_POST['salary'];
			$twit = $_POST['twit'];
			$position = $_POST['position'];
			$image = $_FILES['image']['name'];
		}

	else{
		header("location: admin.php?error=submitbuttonfail");
	}

		$sql="INSERT INTO `players`(`name`, `nationality`, `age`, `jerseyNo`, `salary`, `position`, `twitter`, `image`) VALUES (?,?,?,?,?,?,?,?)";
			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: admin.php?error=stmtfailedplayeradd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "ssiidsss", $name, $nation, $age, $jerseyno, $salary, $position, $twit, $image); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);

			header("location: admin.php");
			exit();


			// $sql = "SELECT * FROM `players` WHERE `name`= $name and `jerseyNo` = $jerseyno ;";
			// 		$result = mysqli_query($connected, $sql);
			// 		//$player = mysqli_fetch_array($result);

			// 		while ($player = mysqli_fetch_array($result)) {
			// 					echo "$player[PlayerID]";
			// 			}					

			// $sql2 = "SELECT `PlayerID` FROM `players` WHERE (`name` = $name and `jerseyNo` = $jerseyno);";
			// $quer = mysqli_query($connected, $sql2);
			// echo gettype('$quer');
			// $temp = mysqli_fetch_array($quer);
			// $playeriid = $temp['PlayerID'];
			// echo "$playeriid";
			// $sql3 = "INSERT INTO `player_stats`(`PlayerID`, `total_match`, `goal`, `assist`) VALUES ($playeriid,0,0,0)";
			// $result = mysqli_query($connected, $sql3);
			// // header("location: admin.php");
			// // exit();			
