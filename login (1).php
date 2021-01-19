<?php 
    include ('header.php');
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
        
    </style>

</head>
<body > 
     <!--Contact Form-->
     <div class="row">
         <div class="col-lg-6">

         </div>
         <div class="col-lg-5">
            <div class="contact-form text-black  p-5 my-5 ">
         
                <div class="title text-center mb-3 pt-5">
                    <h2 class= "font-weight bolder"> Login </h2>
                </div>
                    <form action="login_backend.php" class="w-50 m-auto was-validated" method="post">
        <!--                 <div class="form-group pb-4">
                            
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Please Enter your Name</div>
                        </div>
        
                        <div class="form-group pb-4">
                            
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Please Enter your email</div>
                        </div> -->
                       
                       <div class="form-group pb-4">
                            
                            <input type="text" class="form-control" name="userid" placeholder="Fan ID" >
                            <!-- <div class="valid-feedback">Valid</div> -->
                            <div class="invalid-feedback">Please Enter an fan id</div>
                        </div>
        
                        <div class="form-group pb-4">
                            
                            <input type="password" class="form-control" name="password" placeholder="password" >
                            <!-- <div class="valid-feedback">Valid</div> -->
                            <div class="invalid-feedback">Please Enter a passwerd using (0-9)</div>
                        </div>
                        
        <!--                 <div class="form-group pb-4">
                            
                            <input type="password" class="form-control" name="repeat_password" placeholder="repeat_password" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Please Enter the password again</div>
                        </div>
        
                        <div class="form-group pb-4">
                            
                            <input type="int" class="form-control" name="phone" placeholder="phone number">
        
                        </div> -->
                        <div class="form-group pt-2 text-center">
                            <button type="submit" name="login" class=" btn-dark text-white" >Login</button>
                        </div>
                    </form>
                    <div class="text-center pt-5 text-danger ">
                        <h2><?php 
                            if (isset($_GET["error"])) {
                                if ($_GET["error"]== "useridexist") {
                                    echo 'Fan id does not exist!!!';
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
    <?php 
        include 'footer.php';
     ?>    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>
