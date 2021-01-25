<?php 
    include ('header.php');
    require ('DB_connection.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>

        .back{
        
            background-image:url(image/stadium.jpg);
             background-size: cover;
              background-attachment: fixed;
        
        }
    

        .opes{

            /* filter: alpha(opacity=50);
            background-image:url(maroon.png); */
            background-color: rgba(83, 0, 28, 0.8);
            background-size: cover;
            background-attachment: fixed;
            
        }
       
        </style>

</head>
<body>
 
    
    <div class="container-fluid back"> 
        <div class="row justify-content-center text-center pt-5 p-5 pb-4">
        

                        <div class="col-lg-4 pt-5">
                        <div class="card border-5 border-warning opes"> 
                        <div class="card-body">
                        <h2 class="card-title text-white">Next Match</h2>
                        <h5 class="card-title pb-4 text-success">BPL</h5>
                        <h2 class="card-title text-warning">Dacca United</h2>
                        <h5 class="card-title text-white">Vs</h5>
                        <h2 class="card-title text-danger pb-2">Bashundhara Kings</h2>
                        <h4 class="card-title pt-2 text-white">Time: 26 January, 2021. 7:00 PM</h4>
                        <h4 class="card-title pb-3 text-white">North South Stadium</h4>
                        <a class="class-link" target="_blank" href="Tickets.html">Tickets</a>
                        </div>
                    </div>
    
                </div>
    
        </div>  

    </div>



        <!--Card-->
    <div class="container-fluid">
        <div class="tuts border">
               
        <div class="title text-center">
            <h3 class= "font-weight bolder pb-3 pt-3"> News</h3>
    </div> 
            <div class="row text-center">
    
                <div class="col-lg-3 ">
                        <div class="card bg-white">
                                <img class="card-img-top mx-auto" src="image/messi.jpg" alt="messi" style="width: 300px; height:300px;">
                                <div class="card-body">
                                    <h4 class="card-title">Messi Joining Dacca United</h4>
                                    <p class="card-text">After all the suspense and drama Lionel Messi is coming to Dacca United this season. Messi is excited to come to Dacca and show his charisma.</p>
                                    <a class="class-link stretched-link" target="_blank" href="News.html">Visit News</a>
                                </div>
                        </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="card bg-white">
                            <img class="card-img-top mx-auto" src="image/jamal.jpg" alt="jamal" style="width: 300px; height:300px;" >
                            <div class="card-body">
                                <h4 class="card-title">Man of The match Jamal</h4>
                                <p class="card-text">Midfielder Jamal Bhuyan showed his real class in the last game with 2 assists and 1 goal in the Champions League. He is hopeful that Dacca will win this year.</p>
                                <a class="class-link stretched-link" target="_blank" href="News.html">Visit News</a>
                            </div>
                    </div>
             </div>
    
             <div class="col-lg-3">
                <div class="card bg-white">
                        <img class="card-img-top mx-auto"src="image/ron.jpg" alt="ron" style="width: 350px; height:300px;">
                        <div class="card-body">
                            <h4 class="card-title">Ronaldo Wants to Join Dacca</h4>
                            <p class="card-text">Transfer negotiation is going on about Cristiano and he gave a positive vibe about Dacca by saying he's interested.Perez, Ramos, Marcelo also excited about the reunion.</p>
                            <a class="class-link stretched-link" target="_blank" href="News.html">Visit News</a>
                        </div>
                </div>
         </div>
         <div class="col-lg-3">
            <div class="card bg-white">
                    <img class="card-img-top mx-auto" src="image/perez.jpg" alt="messi" style="width: 300px; height:290px;">
                    <div class="card-body">
                        <h4 class="card-title">Perez Is Happy With The Performance</h4>
                        <p class="card-text">Dacca United's Director of Football Florentino Perez is happy with the performance.He also said,"New surprises are coming in this transfer window"</p>
                        <a class="class-link stretched-link" target="_blank" href="News.html">Visit News</a>
                    </div>
            </div>
     </div>
            </div>
        </div>
    </div>
            
    <div class="container-fluid">
    <div class="row text-center justify-content-center pb-3 pt-3">

        <div class="col-lg-4 border-5">
                <div class="card bg-white border-5">
                        <div class="card-body">
                            <h4 class="card-title">Last Game Result</h4>
                            <h5 class="card-title">AFC Champions League</h5>
                            <h5 class="card-title">Dacca United 2:0 Ulsan Hyundai</h5>
                            <a class="class-link stretched-link" target="_blank" href="Matches.html">Match Results</a>
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
            <img class="card-img-top mx-auto" src="image/Lewa.png" alt="lewa" style="width: 300px; height:300px;" >
                <div class="card-body">
                    <h2 class="card-title">Robert Lewandowski</h2>
                    <h3 class="card-title">Matches: 22</h3>
                    <h3 class="card-title">Goals: 19</h3>
                    <a class="class-link stretched-link" target="_blank" href="team-card.html">Visit Players</a>
                </div>
        </div>
    </div>     
    <div class="col-lg-4 border-5">
        <div class="card bg-white border-5">
           <h2 class="card-title">Top Assist</h2>    
           <img class="card-img-top mx-auto" src="image/Bruno.jpg" alt="bruno" style="width: 300px; height:300px;" >
               <div class="card-body">
                   <h2 class="card-title">Bruno Fernandes</h2>
                   <h3 class="card-title">Matches: 22</h3>
                   <h3 class="card-title">Assists: 17</h3>
                   <a class="class-link stretched-link" target="_blank" href="team-card.html">Visit Players</a>
               </div>
       </div>
   </div>     


</div>     
</div>
        
    <div class="container-fluid bg-light">
        <h4 class="pt-5 font-weight bolder text-center">Our Sponsors</h4>
        <div class= "row">
            <div class="col-lg-2 pt-2 ">
                <div class="media">
                    <img src="image/Like.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media">
                    <img src="image/Fraud.png" alt="logo" style="width: 210px; height:150px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="image/Diet.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="image/Hotqueen.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="image/adios.png" alt="logo" style="width: 210px; height:210px;">
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="media p-2">
                    <img src="image/oops.png" alt="logo" style="width: 210px; height:150px;">
                </div>
            </div>
        
        </div>

        <div class="mb-3 my-5"></div>
</div>

 <?php 
    include 'footer.php';
   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 
 </body>
 </html>