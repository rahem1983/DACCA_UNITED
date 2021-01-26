<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>


    </style>
</head>
<body>
     <!--Navigation Bar-->
     <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <a href="index.php" class="navbar-brand">
                <img src="DU logo.png" alt="logo" style= "width: 70px;">
            </a>
             <div class="col-lg-3">
                <h3 class="text-white mr-5">DACCA UNITED</h3>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="team-card.php">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="Matches.php">Match</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tickets.php">Ticket</a></li>
                    <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                    <?php
                        if (isset($_SESSION['email'])){
                            if ($_SESSION['email'] == "daccaunited.admin@gmail.com") {
                                echo '<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                                
                              }  
                            else{
                                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                            }  
                        }
                        else{
                            echo '<li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>' ;
                        }
                     ?>
                </ul>
              </div>

        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
