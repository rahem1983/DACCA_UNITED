<?php 
	include "DB_connection.php";
	include "function.php";

	//checking the inputs and save to variable-->
	if (isset($_POST['addproduct'])) {
			$name = $_POST['name'];
			$id = $_POST['id'];
			$cate = $_POST['cate'];
			$price = $_POST['price'];
			$image = $_FILES['image']['name'];

		$sql="INSERT INTO `product`(`productID`,`productname`, `category`, `price`, `image`) VALUES (?,?,?,?,?)";
			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: admin.php?error=stmtfailedplayeradd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "issds",$id, $name, $cate, $price, $image); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: admin.php");
			exit();

		}
	if (isset($_POST['update_product'])) {
			$id = $_POST['id'];
			$price = $_POST['price'];

			$sql="UPDATE product SET price = $price WHERE productID=$id;";
			$result = mysqli_query($connected,$sql);

			header("location: admin.php");
			exit();

		}
	if (isset($_POST['delete'])) {
			$id = $_POST['id'];

			$sql="DELETE FROM `product` WHERE productID=$id;";
			$result = mysqli_query($connected,$sql);

			header("location: admin.php");
			exit();

		}
