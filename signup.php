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

    <style type="text/css">

body{

    background-image:url(barnabue.png);
     background-size: cover;
      background-attachment: fixed;

}

</style>


</head>
<body > 
     <!--Contact Form-->
    <div class="contact-form text-black  p-5 my-5 ">
         
        <div class="title text-white text-center mb-3 pt-5 pb-2">
            <h2 class= "font-weight bolder"> Sign up </h2>
        </div>
            <form action="signup_backend.php" class="w-50 m-auto was-validated" method="post">
                <div class="form-group pb-4 ">
                    
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback "><h6 class="font-weight bolder">Please Enter your Name</h6></div>
                </div>

                <div class="form-group pb-4">
                    
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter your email</h6></div>
                </div>
               
               <!-- <div class="form-group pb-4">
                    
                    <input type="text" class="form-control" name="userid" placeholder="Fan ID" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter an fan id</h6></div>
                </div> -->

                <div class="form-group pb-4">
                    
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter a passwerd using (0-9)</h6></div>
                </div>
                
                <div class="form-group pb-4">
                    
                    <input type="password" class="form-control" name="repeat_password" placeholder="confirm password" required>
                    <div class="valid-feedback"><h6 class="font-weight bolder">Valid</h6></div>
                    <div class="invalid-feedback"><h6 class="font-weight bolder">Please Enter the password again</h6></div>
                </div>

                <div class="form-group pb-4">
                    
                    <input type="int" class="form-control" name="phone" placeholder="phone number">

                </div>
                <div class="form-group pt-2 text-center">
                    <button type="submit" name="signup" class="btn-lg btn-muted text-dark" ><h5 class="font-weight bolder">Sign up</h5></button>
                </div>
            </form>
            <div class="text-center pt-5 text-danger ">
                <h2><?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"]== "passwardMissMatch") {
                            echo 'Passward does not match!!!';
                        }
                        elseif ($_GET["error"]== "emailexist") {
                            echo 'Fan id allready exist!!!';
                        }
                    }

                 ?></h2>
            </div>
           
    </div>
       
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>

<?php 
        include 'footer.php';
     ?> 