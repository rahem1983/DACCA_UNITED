<?php 
    include 'header.php';
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
<body>
    
    <div class="team-table my-5 pt-5">
        <div class="title text-center mb-3">
        </div>
        <div class="title text-center mb-3">
            <h1 class= "py-3 font-weight border">Store</h1>
        </div>
    </div>
         <!--Card-->
<!--  <div class="tuts border">           
</div> -->
<div class="container py-5">
        <div class="row mt-4">
        <?php
            $sql= 'SELECT * FROM product ;';       
            $result = mysqli_query($connected, $sql);                      
            while ($product = mysqli_fetch_array($result)) {?>  
            <div class="col-lg-4 pt-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <?php echo '<img class="card-img-top" src="image/',$product['image'],'" alt="nu" style="width: 350px;height:350px;"'; ?>
                                <h4 class="card-title"></h4>
                                <h4 class="card-title"> <?php echo " $product[productname] "; ?> </h4>
                                <h5 class="card-title">Product ID:<?php echo " $product[productID] "; ?></h5>
                                <h5 class="card-title">Price: ৳  <?php echo " $product[price] "; ?> </h5>
                            </div>
                    </div>
             </div>
             <?php } ?>
        </div>

    </div>
    <div class="container-fluid  text-center">
        <div >
            <div class="row pb-5">
                <div class="col-lg-12"><a class="btn btn-outline-warning" href="TicketForm.php">Shop now</a>    
                </div>
            </div>

        </div>
    </div>
<div class="container-fluid bg-white ">
        <div class="bg-white">
            <div class="row pb-5" class="bg-white">

            </div>
        </div>
</div>

<?php 
    include 'footer.php';
   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>