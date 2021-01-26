<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if (isset($_POST['delete'])) {
		
			$deleteid = $_POST['deleteid'];
			if (playeridexist($connected, $deleteid)) {
				$sql="DELETE FROM `players` WHERE `PlayerID` = $deleteid";
				$result = mysqli_query($connected, $sql); 
			}
			else{
				header("location: admin.php?error=playeridnotexist");
				exit();
			}
			
		}


	if (isset($_POST['update'])) {

		if (isset($_POST['playerid'])) {
			$playerid = $_POST['playerid'];
			if (playeridexist($connected, $playerid)) {
				 if (isset($_POST['jerseyno'])) {
					$jerseyno = $_POST['jerseyno'];
					$sql = "UPDATE `players` SET `jerseyNo`= $jerseyno WHERE `PlayerID`= $playerid";
					$result = mysqli_query($connected, $sql);
				}
				
				if (isset($_POST['salary'])) {
					$salary = $_POST['salary'];
					$sql = "UPDATE `players` SET `salary`= $salary WHERE `PlayerID`= $playerid";
					$result = mysqli_query($connected, $sql);
				}

				if (isset($_POST['goal'])) {
					$goal = $_POST['goal'];
					$sql = "SELECT goal FROM `player_stats` WHERE `PlayerID`= $playerid";
					$result = mysqli_query($connected, $sql);
					$player = mysqli_fetch_array($result);
					$totgoal = $player['goal'] + $goal;
					$sql = "UPDATE `player_stats` SET `goal`= $totgoal WHERE `PlayerID`= $playerid";
					$result2 = mysqli_query($connected, $sql);
				}

				if (isset($_POST['assist'])) {
					$assist = $_POST['assist'];
					$sql = "SELECT assist FROM `player_stats` WHERE `PlayerID`= $playerid";
					$result = mysqli_query($connected, $sql);
					$player = mysqli_fetch_array($result);
					$totassist = $player['assist'] + $assist;
					$sql = "UPDATE `player_stats` SET `assist`= $totassist WHERE `PlayerID`= $playerid";
					$result2 = mysqli_query($connected, $sql);
				}
				
				if (isset($_POST['match'])) {
					$match = $_POST['match'];
					$sql = "SELECT total_match FROM `player_stats` WHERE `PlayerID`= $playerid";
					$result = mysqli_query($connected, $sql);
					$player = mysqli_fetch_array($result);
					$totmatch = $player['total_match'] + 1;
					$sql = "UPDATE `player_stats` SET `total_match`= $totmatch WHERE `PlayerID`= $playerid";
					$result2 = mysqli_query($connected, $sql);

				}

				header("location: admin.php");
				exit();
			}
			else{

				header("location: admin.php?error=playeridnotexist");
				exit();
			}
		}
		else{
			header("location: admin.php?error=playeridnotgiven");
			exit();
		}
	}
		
	else{
		header("location: admin.php?error=submitbuttonfail");
	}
