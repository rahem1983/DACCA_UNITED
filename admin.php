<?php 
    include ('header.php');
    require ('DB_connection.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dacca Utd Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>


    </style>

</head>
<body>
    <div class="container-fluid">
    <div class="team-table my-5">
        <div class="title text-center mb-3">
            <h1 class= "font-weight bolder py-5"> Admin Panel</h1>
            <h2 class= pt-3>Players</h2>
        </div>

         <!--Card-->
 <div class="tuts border">           
</div> 
    
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Add Player</h3>
                    <form action="addplayer_backend.php" class="w-50 m-auto" method="post" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required></div>
                        
                        <div class="form-group pt-2">
                        <label for="nation">Nationality</label>
                        <input type="text" class="form-control" name="nation" required>
                        </div>

                        <div class="form-group pt-2">
                            <label for="age">Age</label>
                            <input type="number" min=16 class="form-control" name="age" required>
                            </div>

                         <div class="form-group pt-2">
                            <label for="kit">Jersey No.</label>
                            <input type="number" min=0 class="form-control" name="jerseyno" required>
                            </div>   

                            <div class="form-group pt-2">
                                <label for="salary">Salary</label>
                                <input type="number" min=1000 class="form-control" name="salary" required>
                                </div> 
                             
                                <div class="form-group pt-2">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" name="position" required>
                                    </div>    

                                <div class="form-group pt-2">
                                    <label for="twit">Twitter</label>
                                    <input type="text" class="form-control" name="twit" required>
                                    </div>
                                
                                        <div class="fileupload fileupload-new pt-3" data-provides="fileupload">
                                            <span class="btn btn-light btn-file"><span class="fileupload-new">Upload player image</span>
                                            <input type="file" name="image"></span>
                                            
                                          </div>

                    
                            <div class="pt-3  text-center">
            
                                <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="submit">Add</button></div>
                         </div>
                    </form>
                </div>
        </div>
        </div>
    </div>


    <div class="row">
                <div class="col-lg-6">
            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Edit Player</h3>
                    <form action="editplayer_backend.php" class="w-50 m-auto" method="post">
                        
                        
                        <div class="form-group pt-2">
                            <label for="playerid">Player ID</label>
                            <input type="number" min=0 class="form-control" name="playerid">
                        </div>  
                    

                        <div class="form-group pt-2">
                            <label for="jerseyno">Jersey No.</label>
                            <input type="number" min=0 class="form-control" name="jerseyno">
                        </div>   

                        <div class="form-group pt-2">
                            <label for="salary">Salary</label>
                            <input type="number" min=1000 class="form-control" name="salary">
                        </div> 
                             
                        <div class="form-group pt-2">
                            <label for="goal">Goals</label>
                             <input type="number" min=0 class="form-control" name="goal" value="0">
                        </div>
                        
                        <div class="form-group pt-2">
                            <label for="assist">Assist</label>
                             <input type="number" min=0 class="form-control" name="assist" value="0">
                        </div>

                        <div class="form-group pt-2">
                            <label for="match">Match</label>
                             <input type="number" min=1 max=1 class="form-control" name="match" value="1">
                        </div>

                        <div class="pt-3  text-center">
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="update">Update</button></div>
                         </div>
                    </form>
                    
                 </div>
            </div>
            </div>


        <div class="col-lg-6">
            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center pb-5">Delete Player</h3>
                    <form action="editplayer_backend.php" class="w-50 m-auto" method="post">
                        <div class="pt-5"></div>
                    <div class="form-group pt-5 pb-5">
                        <label for="deleteid">Player ID</label>
                        <input type="number" min=0 class="form-control" name="deleteid">
                        </div> 
                        <div class="pt-5 text-center">
                        <div class="pt-5"></div>
                        <div class="pt-5"></div>
                            <div class="text-center pt-5"><button type="delete" class="btn btn-warning" name="delete">Delete</button></div>
        
                        </div>
                    </form>

        </div>
    </div>
</div>
</div>
</div>

<div class="team-table my-5">
    <div class="title text-center mb-3">
        <h2 class= pt-3>Match</h2>
    </div>
    <div class="tuts border">           
    </div> 

    <div class="row">

        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Add Match</h3>
                    <form action="matchEdit_backend.php" class="w-50 m-auto" method="post">
                    <div class="form-group pt-2">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date">
                        </div> 

                        <div class="form-group pt-2">
                            <label for="competetion">Competetion</label>
                            <input type="text" class="form-control" name="competetion">
                            </div>

                            <div class="form-group pt-2">
                                <label for="home">Home Team</label>
                                <input type="text" class="form-control" name="home">
                                </div>

                                <div class="form-group pt-2">
                                    <label for="away">Away Team</label>
                                    <input type="text" class="form-control" name="away">
                                    </div>   



                        <div class="pt-3 text-center">
            
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="add">Done</button></div>
        
        
                        </div>
                    </form>

        </div>
    </div>
        </div>

        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center pb-2">Match Result</h3>
                    <form action="matchEdit_backend.php" class="w-50 m-auto" method="post">
                    <div class="form-group pt-2">
                        <label for="matchid">Match ID</label>
                        <input type="number" min=0 class="form-control" name="matchid">
                        </div> 

                        <div class="form-group pt-2">
                            <label for="dacca">Dacca United</label>
                            <input type="text" class="form-control" name="dacca">
                            </div>

                            <div class="form-group pt-2 pb-5">
                                <label for="opp">Opponent</label>
                                <input type="text" class="form-control" name="opp">
                                </div>

                        <div class="pt-4 text-center">
            
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="match_result">Done</button></div>
        
        
                        </div>
                    </form>

        </div>
    </div>
        </div>
            
        </div>
    </div>

    <div class="team-table my-5">
        <div class="title text-center mb-3">
            <h2 class= pt-3>Store</h2>
        </div>

         <!--Card-->
 <div class="tuts border">           
</div> 
    
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Add Product</h3>
                    <form action="product_backend.php" class="w-50 m-auto" method="post" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name"></div>
                        
                        <div class="form-group pt-2">
                        <label for="id">Product ID</label>
                        <input type="text" class="form-control" name="id"></div>

                        <div class="form-group pt-2">
                        <label for="cate">Category</label>
                        <input type="text" class="form-control" name="cate">
                        </div>

                         <div class="form-group pt-2">
                            <label for="price">Price</label>
                            <input type="number" min=0 class="form-control" name="price">
                            </div>   
                                <div class="fileupload fileupload-new pt-3" data-provides="fileupload">
                                    <span class="btn btn-light btn-file"><span class="fileupload-new">Upload prodiuct image</span>
                                    <input type="file" name="image"></span>
                                            
                                </div>
                    
                            <div class="pt-3  text-center">
            
                                <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="addproduct">Add</button></div>
                         </div>
                    </form>
                </div>
        </div>
        </div>
    </div>  
    

    <div class="row">
        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Update Price</h3>
                    <form action="product_backend.php" class="w-50 m-auto" method="post" >
                        <div class="form-group pt-2">
                            <label for="id">Product ID</label>
                            <input type="number" min=0 class="form-control" name="id">
                            </div>

                            <div class="form-group pt-2">
                                <label for="price">Price</label>
                                <input type="number" min=0 class="form-control" name="price">
                                </div>


                        <div class="pt-3 text-center">

                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="update_product" >Update</button></div>


                        </div>
                    </form>

        </div>
    </div>
        </div>

        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center pb-4">Delete Product</h3>
                    <form action="product_backend.php" class="w-50 m-auto" method="post">
                        <div class="form-group pt-2">
                            <label for="id">Product ID</label>
                            <input type="number" min=0 class="form-control" name="id">
                            </div>


                        <div class="pt-5 pb-2 text-center">
            
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="delete">Delete</button></div>
        
        
                        </div>
                    </form>

        </div>
    </div>
        </div>

    </div>
 </div>


    <div class="team-table my-5">
    <div class="title text-center mb-3">
        <h2 class= pt-3>News</h2>
    </div>

     <!--Card-->
<div class="tuts border">           
</div> 

    <div class="row">
        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center">Add News</h3>
                    <form action="newsadmin_backend.php" class="w-50 m-auto" method="post" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                                <label for="title">News Title</label>
                                <input type="text" class="form-control" name="title"></div>

                                <div class="form-group pt-2">
                            <label for="subject">Description</label>
                            <textarea style="resize: none;" name="news" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>

                                
                            <div class="fileupload fileupload-new pt-3" data-provides="fileupload">
                                    <span class="btn btn-light btn-file"><span class="fileupload-new">Upload prodiuct image</span>
                                    <input type="file" name="image"></span>
                                            
                                </div>


                        <div class="pt-3 text-center">
            
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="addnews">ADD</button></div>
        
        
                        </div>
                    </form>

        </div>
    </div>
        </div>

        <div class="col-lg-6">

            <div class="card bg-white border-2">
                <div class="card-body">
                    <h3 class="card-title text-center pb-5">Delete News</h3>
                    <div class= "pt-5 pb-5"></div>
                    <form action="newsadmin_backend.php" class="w-50 m-auto" method="post">
                        <div class="form-group pt-5 pb-5">
                            <label for="id">News ID</label>
                            <input type="number" min=0 class="form-control" name="id">
                            </div>

                                <div class= "pt-5 pb-5"></div>
        
                        <div class="pt-5 pb-4 text-center">
            
                            <div class="text-center pt-3"><button type="submit" class="btn btn-warning" name="deletenews">Delete</button></div>
        
        
                        </div>
                    </form>

        </div>
    </div>
        </div>

    </div>


    
    
    <div class="title text-center mb-3">
        <h2 class= pt-3>Finance</h2>
    </div>

     <!--Card-->
<div class="tuts border">           
</div> 

<div class="row">
    <div class="col-lg-6">
        <div class="card bg-white border-2">
            <div class="card-body">

                <h3 class="card-title text-center pb-3">Products Sold</h3>
                <?php
                $sql= 'SELECT product.category AS category,SUM(sells.quantity) AS quantity,SUM(sells.total) AS total FROM sells,product WHERE product.productID=sells.ProductId GROUP BY product.category;';       
                $result = mysqli_query($connected, $sql);                      
                while ($sell = mysqli_fetch_array($result)) {?>  
                    <h5 class="card-title py-1"><u><?php echo "Catergory: $sell[category]";?></u></h5>
                    <h5 class="card-title"><?php echo "Total Quantity Sold: $sell[quantity]";?></h5>
                    <h5 class="card-title"><?php echo "Total Amount Earned: TK. $sell[total]";?></h5>
                 <?php } ?>
                
            </div>
    </div>
    </div>

    <div class="col-lg-6">
        <div class="card bg-white border-2">
            <div class="card-body">
                <h3 class="card-title text-center pb-3">Tickets Sold</h3>

                <?php
                $sql= 'SELECT COUNT(*) AS COUNT,category,SUM(price) AS price FROM ticket GROUP BY category';       
                $result = mysqli_query($connected, $sql);                      
                while ($ticket = mysqli_fetch_array($result)) {?>  
                    <h5 class="card-title py-1"><u><?php echo "Catergory: $ticket[category]";?></u></h5>
                    <h5 class="card-title"><?php echo "Total Tickets Sold: $ticket[COUNT]";?></h5>
                    <h5 class="card-title"><?php echo "Total Amount Earned: TK. $ticket[price]";?></h5>
                 <?php } ?>

                
                
            </div>
    </div>
    </div>
</div>  

<div class="row justify-content-center">

    <div class="col-lg-8">
        <div class="card bg-white border-3">
            <div class="card-body">
                <?php
                $sql= 'SELECT SUM(sells.total)+SUM(ticket.price) AS price FROM sells,ticket';       
                $result = mysqli_query($connected, $sql);                      
                while ($total = mysqli_fetch_array($result)) {?>  
                    <h2 class="card-title text-center pb-3"> <u>Grand Total</u> </h2>
                    <h3 class="card-title py-1 text-center"> <?php echo "$total[price] Taka Only";?></h3>
                 <?php } ?>
                
            </div>
    </div>

    </div>

</div>

</div>  

</div>
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>