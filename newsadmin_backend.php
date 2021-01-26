<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if (isset($_POST['addnews'])) {
			$title = $_POST['title'];
			$news = $_POST['news'];
			$image = $_FILES['image']['name'];

		$sql="INSERT INTO `news`( `title`, `news`, `image`) VALUES (?,?,?)";
			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: admin.php?error=stmtfailedplayeradd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "sss",$title, $news, $image); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: admin.php");
			exit();

		}

	if (isset($_POST['deletenews'])) {
			$id = $_POST['id'];

			$sql="DELETE FROM `news` WHERE NewsID = $id;";
			$result = mysqli_query($connected,$sql);

			header("location: admin.php");
			exit();

		}