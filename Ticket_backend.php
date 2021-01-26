<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if (isset($_POST['buynow'])) {
			$matchid = $_POST['matchid'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$category = $_POST['category'];
			if($category=="VIP TK-10000 Only"){
				$price=10000;
			}
		}

	else{
		header("location: TicketForm.php");
	}

	if (ticketavailable($connected, $matchid)) {

		$sql="INSERT INTO `ticket`(`name`, `email`, `phone`, `category`, `MatchID`, `price` ) VALUES (?,?,?,?,?,?)";

			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: TicketForm.php?error=stmtfailedticket");

				exit();
			}

			mysqli_stmt_bind_param($stmt, "ssssid", $name, $email, $phone, $category, $matchid, $price); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: Tickets.php");
			exit();			
	}
	else{
		header("location: TicketForm.php?error=ticketnotavailable");

				exit();
	}

	