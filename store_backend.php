<?php 
	include "DB_connection.php";
	include "function.php";

//checking the inputs and save to variable-->
if (isset($_POST['submit'])) {
		$productid = $_POST['productid'];
		// $name = $_POST['name'];
		$email = $_POST['email'];
		// $phone = $_POST['phone'];
		// $country = $_POST['country'];
		// $city = $_POST['city'];
		// $division = $_POST['division'];
		// $inputAddress = $_POST['inputAddress'];
		$quantity = $_POST['quantity'];
	}

else{
	header("location: signup.php");
}

	 	$sql = "INSERT INTO `sells`(`ProductId`, `email`, `quantity`, `total`) VALUES  (?, ?, ?, ?);";
 		$stmt = mysqli_stmt_init($connected);
 		if (!mysqli_stmt_prepare($stmt, $sql)) { 
			header("location: StoreForm.php?error=stmtfailed02");
			exit();
		}
		$sql2 = "SELECT * FROM `product` WHERE productID =  $productid";
		$result = mysqli_query($connected, $sql2);
		$price = mysqli_fetch_array($result);
		$total = $price['price'] * $quantity;
		mysqli_stmt_bind_param($stmt, "isid",$productid, $email, $quantity,  $total); 
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: store.php");
		exit();

//checking passward error-->
//  if (productidexist($connected, $productid) == false) {
//  		header("location: StoreForm.php?error=passwardMissMatch");
//  		exit();
//  }
// if (customeremailexist($connection, $email)) {
//  		$sql = "INSERT INTO `sells`(`ProductId`, `email`, `quantity`, `total`) VALUES  (?, ?, ?, ?);";
//  		$stmt = mysqli_stmt_init($connected);
//  		if (!mysqli_stmt_prepare($stmt, $sql)) { 
// 			header("location: StoreForm.php?error=stmtfailed02");
// 			exit();
// 		}
// 		$sql2 = "SELECT price FROM `product` WHERE productID =  $productid";
// 		$result = mysqli_query($connected, $sql2);
// 		$price = mysqli_fetch_array($result);
// 		$total = $price['price'] * $quantity;
// 		mysqli_stmt_bind_param($stmt, "isid",$productid, $email, $quantity,  $total); 
// 		mysqli_stmt_execute($stmt);
// 		mysqli_stmt_close($stmt);
// 		header("location: store.php");
// 		exit();
//  }
//  else{
//  	$sql0 = "INSERT INTO `customer`(`email`, `name`, `phone`, `country`, `division`, `city`, `address`) VALUES (?, ?, ?, ?, ?, ?, ?); ";
//  	$stmt0 = mysqli_stmt_init($connected);
//  		if (!mysqli_stmt_prepare($stmt0, $sql0)) { 
// 			header("location: StoreForm.php?error=stmtfailed02");
// 			exit();
// 		}
// 		mysqli_stmt_bind_param($stmt0, "ssissss",$email, $name, $phone, $country,  $division,  $tocitytal,  $inputAddress); 
// 		mysqli_stmt_execute($stmt0);
// 		mysqli_stmt_close($stmt0);

//  	$sql = "INSERT INTO `sells`(`ProductId`, `email`, `quantity`, `total`) VALUES  (?, ?, ?, ?);";
//  		$stmt = mysqli_stmt_init($connected);
//  		if (!mysqli_stmt_prepare($stmt, $sql)) { 
// 			header("location: signup.php?error=stmtfailed02");
// 			exit();
// 		}
// 		$sql2 = "SELECT price FROM `product` WHERE productID =  $productid";
// 		$result = mysqli_query($connected, $sql2);
// 		$price = mysqli_fetch_array($result);
// 		$total = $price['price'] * $quantity;
// 		mysqli_stmt_bind_param($stmt, "isid",$productid, $email, $quantity,  $total); 
// 		mysqli_stmt_execute($stmt);
// 		mysqli_stmt_close($stmt);
// 		header("location: store.php");
// 		exit();
//  }


