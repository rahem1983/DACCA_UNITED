<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if(isset($_POST['add'])){
			$competetion = $_POST['competetion'];
			$home = $_POST['home'];
			$away= $_POST['away'];
			$date = $_POST['date'];
			echo "$competetion";
			echo "$home";
			echo "$away";
			echo "$date";

			$sql="INSERT INTO `matches` ( date, `competition`, `hometeam`, `awayteam`) VALUES (?,?,?,?);";

			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: admin.php?error=stmtfailedplayeradd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "ssss",$date , $competetion, $home, $away); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: admin.php");
			exit();

	}
	if (isset($_POST['match_result'])) {
			$matchid = $_POST['matchid'];
			$dacca = $_POST['dacca'];
			$opp = $_POST['opp'];

			$sql="INSERT INTO `matchresult`(`MatchID`, `DaccaUnited`, `opponent`) VALUES (?,?,?);";

			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: admin.php?error=stmtfailedplayeradd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "iii", $matchid, $dacca, $opp); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: admin.php");
			exit();

		}




					
