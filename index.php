<?php 
    include ('header.php');
    require ('DB_connection.php');
    $temp = 0;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title><h1>hollamigo</h1></title>
 </head>


 <body>
    

    <style>

        .back{

            background-image:url(image/stadium.jpg);
            background-size: cover;
            background-attachment: fixed;

        }

    </style>

    
    <div class="container-fluid back"> 
        <div class="row justify-content-center text-center pt-5 p-5 pb-4">
                <div class= "pt-5"></div>
                <div class= "pt-5"></div>
                <div class= "pt-5"></div>
        
            <div class="col-lg-4 pt-5">
                <div class="card border-5 border-warning" style="background-color: rgba(83, 0, 28, 0.8); background-size: cover; background-attachment: fixed"> 
                    <div class="card-body">
                        <div class= "pt-5"></div>
                        <?php
                        $sql= 'SELECT * FROM matches where (current_date < date) ORDER BY date LIMIT 1;';       
                        $result = mysqli_query($connected, $sql);                      
                        while ($player = mysqli_fetch_array($result)) {?>  
                            <h2 class="card-title text-white">Next Match</h2>
                            <h5 class="card-title pb-4 text-success"><?php echo "$player[competition]"; ?></h5>
                            <h2 class="card-title text-warning"><?php echo "$player[hometeam]"; ?></h2>
                            <h5 class="card-title text-primary">Vs</h5>
                            <h2 class="card-title text-danger pb-2"><?php echo "$player[awayteam]"; ?></h2>
                            <h4 class="card-title pt-2 text-white"><?php echo "$player[date]"; ?></h4>
                        <?php } ?>

                        <a class="class-link" target="_blank" href="Tickets.php">Tickets</a>
                        <div class= "pt-5"></div>
                    </div>
                </div>
    
            </div>

                <div class= "pb-5"></div>
                <div class= "pt-5"></div>
                <div class= "pt-5"></div>
    
        </div>  

    </div>



        <!--Card-->
    <div class="container-fluid bg-dark">
       

        <div class="title text-center text-white">
            <h3 class= "font-weight bolder pb-3 pt-3"> News</h3>
        </div> 
           
           </div> 


    <div class="container ">
        <div class="row mt-4">
            <?php
                $sql= 'SELECT * FROM news ORDER BY NewsID DESC LIMIT 4;';       
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
                    <div class= "text-center pt-5"><a class="btn btn-warning" href="News.php">View All News</a></div></div>
    </div>

        <div class="pt-5"></div>        
            
    <div class="container-fluid">
        <div class="row text-center justify-content-center pb-3 pt-3">

            <div class="col-lg-4 border-5">
                <div class="card bg-white border-5">
                    <div class="card-body">

                        <?php
                        $sql= 'SELECT * FROM matchresult,matches where (current_date > matches.date AND matches.MatchID=matchresult.MatchID ) ORDER BY date DESC LIMIT 1;';       
                        $result = mysqli_query($connected, $sql);                      
                        while ($mResult = mysqli_fetch_array($result)) {?>  
                            <h4 class="card-title">Last Game Result</h4>
                            <h5 class="card-title"><?php echo "$mResult[competition]"; ?></h5>
                            
                            <?php if ($mResult['hometeam'] == "Dacca United") { ?>
                                <h5 class="card-title"><?php echo "$mResult[hometeam]"," ","$mResult[DaccaUnited]"," - ","$mResult[opponent]"," ","$mResult[awayteam]"; ?></h5>
                            <?php } ?>

                            <?php if ($mResult['hometeam'] != "Dacca United") { ?>
                                <h5 class="card-title"><?php echo "$mResult[hometeam]"," ","$mResult[opponent]"," - ","$mResult[DaccaUnited]"," ","$mResult[awayteam]"; ?></h5>
                            <?php } ?>
                            
                            <a class="class-link stretched-link" target="_blank" href="Matches.php">Match Results</a>
                        <?php } ?>

                    </div>
                </div>
            <div class="card bg-white border-5">
                <div class="card-body">
                    <h2 class="card-title">League Position</h2>
                    <h1 class="card-title">1st</h1>
                </div>
            </div>

            <div class="card bg-white border-5">
                <div class="card-body">
                    <h1 class="card-title">Honors</h1>
                    <h5 class="card-title">5X Bangladesh Premier League</h5>
                    <h5 class="card-title">3X AFC Champions League</h5>
                    <h5 class="card-title">4X Bangladesh Super Cup</h5>
                    <h5 class="card-title">2X Federation Cup</h5>        
                </div>
            </div>
        </div>        
         

    <div class="col-lg-4 border-5">
        <div class="card bg-white border-5">
            <h2 class="card-title">Top Scorer</h2>    
            <?php
                $sql= 'SELECT * FROM players JOIN player_stats WHERE ( players.PlayerID=player_stats.PlayerID AND player_stats.goal=(SELECT MAX(goal) FROM player_stats )) LIMIT 1;';  
                $result = mysqli_query($connected, $sql);     

                while ($player_stats = mysqli_fetch_array($result)) {?>

                    <?php echo '<img class="card-img-top mx-auto" src="image/',$player_stats['image'],'" alt="nu" style="width: 300px;height:300px;"'; ?>
                        <div class="card-body">
                            <h2 class="card-title pt-3"><?php echo "$player_stats[name]"; ?></h2>
                            <h3 class="card-title"><?php echo "Matches: ","$player_stats[total_match]"; ?></h3>
                            <h3 class="card-title"><?php echo "Goal: ","$player_stats[goal]"; ?></h3>
                            <a class="class-link stretched-link pb-3" target="_blank" href="team-card.php">Visit Players</a>
                        </div>
                <?php } ?>
        </div>
    </div>     

      


</div>     
</div>

<div class="pb-5"></div>



    
    <div class="container-fluid bg-light">
        <h4 class="pt-3 font-weight bolder text-center">Our Sponsors</h4>
        <div class= "row">
            <div class="col-lg-2 pt-2 ">
                <div class="media">
                    <img src="Like.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media">
                    <img src="Fraud.png" alt="logo" style="width: 210px; height:150px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="Diet.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="Hotqueen.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="adios.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="oops.png" alt="logo" style="width: 210px; height:150px;">
                </div>
            </div>
        
        </div>

        <div class="mb-3 my-5"></div>








</div>
<?php 
           include('footer.php') ;
         ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 </body>
 </html>