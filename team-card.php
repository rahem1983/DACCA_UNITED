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
<body>
    <!--Navigation Bar-->
    <div class="team-table my-5">
        <div class="title text-center mb-3">
            <h1 class= "font-weight bolder border pt-5 pb-3"> Players</h1>
            <h3 class= "pt-4 pb-4" >Goalkeepers</h3>
        </div>



        <div class="container ">
            <div class="row mt-4">
                <?php
                    $sql= 'SELECT * FROM players WHERE position="Goal Keeper";';       
                    $result = mysqli_query($connected, $sql);                      
                    while ($player = mysqli_fetch_array($result)) {?>  
                    <div class="col-lg-4 pb-4">
                            <div class="card bg-white">
                                <div class="card-body">
                                    <?php echo '<img class="card-img-top" src="image/',$player['image'],'" alt="nu" style="width: 350px;height:350px;"'; ?>
                                        <h4 class="card-title"></h4>
                                        <h4 class="card-title pt-2"> <?php echo " $player[name] "; ?> </h4>
                                        <h5 class="card-title">Nationality : <?php echo " $player[nationality] "; ?></h5>
                                        <h5 class="card-title">Age : <?php echo " $player[age] "; ?> </h5>
                                        <h5 class="card-title">Jersey Number : <?php echo " $player[jerseyNo] "; ?> </h5>
                                        <h5 class="card-title">Salary : ৳ <?php echo " $player[salary] "; ?> </h5>
                                    </div>
                            </div>
                     </div>
                <?php } ?>
            </div>

        </div>
    </div>


    <div class="team-table ">
        <div class="title text-center mb-3">
            <h3 class= "pb-4" >Defenders</h3>
        </div>
    </div>


        <div class="container ">
        <div class="row mt-4">
        <?php
            $sql= 'SELECT * FROM players WHERE position="Defender";';       
            $result = mysqli_query($connected, $sql);                      
            while ($player = mysqli_fetch_array($result)) {?>  
            <div class="col-lg-4 pb-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <?php echo '<img class="card-img-top" src="image/',$player['image'],'" alt="nu" style="width: 350px;height:350px;"'; ?>
                                <h4 class="card-title"></h4>
                                <h4 class="card-title pt-2"> <?php echo " $player[name] "; ?> </h4>
                                <h5 class="card-title">Nationality : <?php echo " $player[nationality] "; ?></h5>
                                <h5 class="card-title">Age : <?php echo " $player[age] "; ?> </h5>
                                <h5 class="card-title">Jersey Number : <?php echo " $player[jerseyNo] "; ?> </h5>
                                <h5 class="card-title">Salary : ৳ <?php echo " $player[salary] "; ?> </h5>
                            </div>
                    </div>
             </div>
             <?php } ?>
        </div>

    </div>


    <div class="team-table my-5">
        <div class="title text-center mb-3">
            <h3 class= "pb-4" >Midfielders</h3>
        </div>



        <div class="container ">
        <div class="row mt-4">
        <?php
            $sql= 'SELECT * FROM players WHERE position="Midfielder";';       
            $result = mysqli_query($connected, $sql);                      
            while ($player = mysqli_fetch_array($result)) {?>  
            <div class="col-lg-4 pb-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <?php echo '<img class="card-img-top" src="image/',$player['image'],'" alt="nu" style="width: 350px;height:350px;"'; ?>
                                <h4 class="card-title"></h4>
                                <h4 class="card-title pt-2"> <?php echo " $player[name] "; ?> </h4>
                                <h5 class="card-title">Nationality : <?php echo " $player[nationality] "; ?></h5>
                                <h5 class="card-title">Age : <?php echo " $player[age] "; ?> </h5>
                                <h5 class="card-title">Jersey Number : <?php echo " $player[jerseyNo] "; ?> </h5>
                                <h5 class="card-title">Salary : ৳ <?php echo " $player[salary] "; ?> </h5>
                            </div>
                    </div>
             </div>
             <?php } ?>
        </div>

    </div>
</div>

    <div class="team-table my-5">
        <div class="title text-center mb-3">
            <h3 class= "pb-4" >Forwards</h3>
        </div>



        <div class="container ">
        <div class="row mt-4">
        <?php
            $sql= 'SELECT * FROM players WHERE position="Forward";';       
            $result = mysqli_query($connected, $sql);                      
            while ($player = mysqli_fetch_array($result)) {?>  
            <div class="col-lg-4 pb-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <?php echo '<img class="card-img-top" src="image/',$player['image'],'" alt="nu" style="width: 350px;height:350px;"'; ?>
                                <h4 class="card-title"></h4>
                                <h4 class="card-title pt-2"> <?php echo " $player[name] "; ?> </h4>
                                <h5 class="card-title">Nationality : <?php echo " $player[nationality] "; ?></h5>
                                <h5 class="card-title">Age : <?php echo " $player[age] "; ?> </h5>
                                <h5 class="card-title">Jersey Number : <?php echo " $player[jerseyNo] "; ?> </h5>
                                <h5 class="card-title">Salary : ৳ <?php echo " $player[salary] "; ?> </h5>
                            </div>
                    </div>
             </div>
             <?php } ?>
        </div>

    </div>
</div>

         <!--Card-->
 
    <?php 
    include 'footer.php';
   ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>