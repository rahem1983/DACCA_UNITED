<?php 
    include 'header.php';
    require ('DB_connection.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dacca United-Team</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
        <style>


        </style>

    </head>

    <BODY>

        <div class="container-fluid">
            <div class="tuts border">
                <div class="title text-center">
                    <h3 class= "font-weight bolder pb-3 pt-3"> News</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="tuts border">
                <div class="title text-center">
                    <h3 class= "font-weight bolder pb-3 pt-3"> News</h3>
                </div>
            </div>
        </div>
        
        <div class="container ">
            <div class="row mt-4">
                <?php
                    $sql= 'SELECT * FROM news ORDER BY NewsID DESC;';       
                    $result = mysqli_query($connected, $sql);                      
                    while ($news = mysqli_fetch_array($result)) {?>  
                        <div class="col-lg-3">
                            <div class="card bg-white" style="height:550px;" >
                                <div class="card-body">
                                    <?php echo '<img class="card-img-top mx-auto" src="image/',$news['image'],'" alt="nu" style="width: 270px;height:270px;"'; ?>
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title pt-3"><?php echo "$news[title]"; ?></h4>
                                        <p class="card-text"><?php echo "$news[news]"; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>

        </div>
        <div class="pt-5"></div>
    
        <?php 
           include('footer.php') ;
         ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    </BODY>

</html>