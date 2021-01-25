<?php 
    include 'header.php';
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
        <div class="bg-dark">
            <div class="row" class="bg-dark">

    </div>
</div>
    

    <div class="container-fluid bg-dark ">
   <!--Team Table-->
   <div class="team-table my-5 bg-dark text-warning my-1 pt-5">
    <div class="title text-center mb-1">
        <h1 class= "font-weight bolder py-4"> Match Fixtures</h1>
    </div>

<table class="table table-bordered border-warning text-center text-white">
    <thead class="thead">
        <tr>

            <th>Date</th>
            <th>Competetion</th>
            <th>Home Vs Away</th>
              
        </tr>
    </thead>
    <tbody>
            <?php
                    $sql= 'SELECT * FROM matches where (current_date < date) ORDER BY date LIMIT 10;';
                    $result = mysqli_query($connected, $sql);

                        while ($matches = mysqli_fetch_array($result)) {?>
                        <tr>
                                <td class="p-3 "><?php echo "$matches[date]"; ?></td>
                                <td class="p-3"><?php echo "$matches[competition]";?></td>
                                <td class="p-3"><?php echo "$matches[hometeam]", " vs ", "$matches[awayteam]";?></td>    
                            </tr>
                    <?php 
                    }
                    
                ?>
        
      


    </tbody>
</table>


</div>


<div class="team-table my-5 bg-dark text-warning pt-5">
    <div class="title text-center mb-1">
        <h1 class= "font-weight bolder py-5"> Match Results</h1>
    </div>

<table class="table table-bordered border-warning text-center text-white">
    <thead class="thead">
        <tr>

            <th>Date</th>
            <th>Competetion</th>
            <th>Home Vs Away</th>
            <th>Result</th>  
        </tr>
    </thead>


    <tbody>
            <?php
                    $sql= "SELECT * FROM matchresult,matches WHERE matchresult.MatchID = matches.MatchID ORDER BY date;";
                    $result = mysqli_query($connected, $sql);
                     gettype($result);
                        while ($matches = mysqli_fetch_array($result) ) {?>
                        <tr>
                                <td class="p-3 "><?php echo "$matches[date]"; ?></td>
                                <td class="p-3"><?php echo "$matches[competition]";?></td>
                                <td class="p-3"><?php echo "$matches[hometeam]", " vs ", "$matches[awayteam]";?></td>
                                <?php if ($matches['DaccaUnited'] > $matches['opponent']) { ?>
                                    <td class="p-3 text-success"><?php echo "$matches[DaccaUnited]", " - ", "$matches[opponent]", " (W)";?></td>
                                <?php }

                                    else if ($matches['DaccaUnited'] < $matches['opponent']) { ?>
                                    <td class="p-3 text-danger"><?php echo "$matches[DaccaUnited]", " - ", "$matches[opponent]", " (L)";?></td>
                                <?php }

                                else if ($matches['DaccaUnited'] == $matches['opponent']) { ?>
                                    <td class="p-3 text-warning"><?php echo "$matches[DaccaUnited]", " - ", "$matches[opponent]", " (D)";?></td>
                                <?php }

                                ?>    
                            </tr>
                    <?php 
                    }
                    
                ?>
       
    </tbody>
</table>
</div>

  <?php 
    include 'footer.php';
   ?>
</div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>