<?php 
    include ('header.php');
    require ('DB_connection.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dacca United</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>


    </style>

</head>
<body>
    <!--Navigation Bar-->
    



    <div class="container-fluid bg-dark ">
        <div class="bg-dark">
            <div class="row pb-5" class="bg-dark">

            </div>
        </div>
   <!--Team Table-->
   <div class="team-table my-5 bg-dark text-warning my-1 ">
    <div class="title text-center mb-1">
        <h1 class= "font-weight bolder py-5"> Tickets</h1>
    </div>

<table class="table table-bordered text-center text-white">
    <thead class="thead">
        <tr>

            <th>Match Number</th>
            <th>Competetion</th>
            <th>Home Vs Away</th>
            <th>Date</th>  
        </tr>
    </thead>
    <tbody>
        <?php
                    $sql= 'SELECT * FROM ticket INNER JOIN matches where (CURRENT_DATE < matches.date and hometeam = "Dacca United") ORDER BY matches.date';
                    $result = mysqli_query($connected, $sql); 

                        while ($ticket = mysqli_fetch_array($result)) {?>
                        <tr>
                                <td class="p-3"><?php echo "$ticket[MatchID]"; ?></td>
                                <td class="p-3"><?php echo "$ticket[competition]";?></td>
                                <td class="p-3"><?php echo "$ticket[hometeam]", " vs ", "$ticket[awayteam]";?></td>
                                <td class="p-3"><?php echo "$ticket[date]"; ?></td>

                            </tr>
                    <?php 
                    }
                    
                ?>  
    </tbody>
</table>
<div class="container-fluid bg-dark text-center">
        <div class="bg-dark">
            <div class="row pb-5 pt-3" class="bg-dark">
                <div class="col-lg-12 font-weight bolder"><a class="btn btn-outline-warning" href="TicketForm.php">Buy Ticket</a></div>


            </div>
        </div>

    </div>
</div>
    <div class="container-fluid bg-dark ">
        <div class="bg-dark">
            <div class="row pb-5" class="bg-dark">

    </div>
</div>

<div class="container-fluid bg-dark ">
        <div class="bg-dark">
            <div class="row pb-5" class="bg-dark">

    </div>
</div>

</div> 

<?php 
    include 'footer.php';
   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>