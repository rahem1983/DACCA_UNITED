<?php 
    //include ('header.php');
    require ('DB_connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body{

	    background-image:url(barnabue.png);
	    background-size: cover;
	    background-attachment: fixed;

		}
    </style>

</head>
<body > 
     <!--Contact Form-->
     <div class="pb-5"><?php 
    	include ('header.php');
 	?></div>

 	<div class="row ">
 		<div class="col-lg-12 pt-5"></div>
 	</div>

	<div class="row ">
 		<div class="col-lg-12 pt-5"></div>
 	</div>

     <div class="row ">
     	
         <div class="col-lg-6 text-center text-white bolder">
<!-- 			<p><h1>WE</h1></p>
			<p><h1>ARE</h1></p>
			<p><h1>UNITED</h1></p> -->
         </div>

         <div class="col-lg-5">
            <div class="contact-form text-black  p-5 border border-warning rounded border-2">
         
                <div class="title text-center mb-3">
                    <h2 class= "text-white font-weight bolder"> Login </h2>
                </div>
                    <form action="login_backend.php" class="w-50 m-auto was-validated" method="post">

                       
                       <div class="form-group pb-4">
                            
                            <input type="text" class="form-control" name="email" placeholder="email" >
                            <!-- <div class="valid-feedback">Valid</div> -->
                           	<div class="invalid-feedback">Please Enter an email</div>
                        </div>
        
                        <div class="form-group pb-4">
                            
                            <input type="password" class="form-control" name="password" placeholder="password" >

                            <div class="invalid-feedback">Please Enter a passwerd using (0-9)</div>
                        </div>
                        

                        <div class="form-group pt-2 text-center">
                            <button type="submit" name="login" class="btn-lg btn-muted text-dark " >Login</button>
                        </div>
                    </form>
                    <div class="text-center pt-5 text-danger ">
                        <h2><?php 
                            if (isset($_GET["error"])) {
                                if ($_GET["error"]== "emailexist") {
                                    echo 'Email does not exist!!!';
                                }
                                elseif ($_GET["error"]== "wrongpassword") {
                                    echo 'Passward does not match!!!';
                                }
                            }
        
                         ?></h2>
                    </div>
                   
            </div>
         </div>
         <div class="col-lg-1">

         </div>
    
</div>
	<div class="row ">
 		<div class="col-lg-12 pt-5"></div>
 	</div>
 	<div class="row ">
 		<div class="col-lg-12 pt-5"></div>
 	</div>
    <div><?php 
        include 'footer.php';
     ?> </div>   
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>
