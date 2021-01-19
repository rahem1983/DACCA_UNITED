<?php 
    include 'header.php';
    include 'DB_connection.php';
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

<table class="table table-bordered text-center text-white">
    <thead class="thead">
        <tr>

            <th>Date</th>
            <th>Competetion</th>
            <th>Home Vs Away</th>
            <th>Ticket</th>  
        </tr>
    </thead>
    <tbody>
            <tr>
                    <td>26 January, 2021</td>
                    <td>Bangladesh Premier League</td>
                    <td>Dacca United Vs Bashundhara Kings</td>
                    <td class="float-right">
                        <a class="btn btn-outline-warning" href="">Buy Ticket</a>
                    </td>

            </tr>
            <tr>
                <td>29 January, 2021</td>
                <td>Federation Cup</td>
                <td>Brothers Union Vs Dacca United</td>
                <td class="float-right">
                  <a class="btn btn-outline-warning" href="">Buy Ticket</a>
                </td>

        </tr>
        <tr>
            <td>31 January, 2021</td>
            <td>Bangladesh Premier League</td>
            <td>Dacca United Vs Sheikh Jamal</td>
            <td class="float-right">
                <a class="btn btn-outline-warning" href="">Buy Ticket</a>
            </td>

        </tr>
        <tr>
            <td>3 February, 2021</td>
            <td>Federation Cup</td>
            <td>Abahani Vs Dacca United</td>
            <td class="float-right">
            <a class="btn btn-outline-warning" href="">Buy Ticket</a>
        </td>

    </tr>
    <tr>
        <td>6 February, 2021</td>
        <td>Bangladesh Premier League</td>
        <td>Dacca United Vs Saif Sporting Club</td>
        <td class="float-right">
        <a class="btn btn-outline-warning" href="">Buy Ticket</a>
    </td>

</tr> 
      


    </tbody>
</table>


</div>


<div class="team-table my-5 bg-dark text-warning pt-5">
    <div class="title text-center mb-1">
        <h1 class= "font-weight bolder py-5"> Match Results</h1>
    </div>

<table class="table table-bordered text-center text-white">
    <thead class="thead">
        <tr>

            <th>Date</th>
            <th>Competetion</th>
            <th>Home Vs Away</th>
            <th>Result</th>  
        </tr>
    </thead>
    <tbody>
                 <tr>
                    <td>1 January, 2021</td>
                    <td>Bangladesh Premier League</td>
                    <td> Muktijoddha Sangsad KC Vs Dacca United</td>
                    <td class="text-success">0-4 (W)</td>

                 </tr>
            <tr>
                    <td>4 January, 2021</td>
                    <td>AFC Cup</td>
                    <td>Dacca United Vs Ulsan Hyundai</td>
                    <td class="text-success">2-0 (W)</td>

            </tr>
            <tr>
                <td>10 January, 2021</td>
                <td>Federation Cup</td>
                <td> Mohammedan Vs Dacca United</td>
                <td class="text-warning">1-1 (D)</td>
    
        </tr>
            <tr>
                <td>16 January, 2021</td>
                <td>Bangladesh Premier League</td>
                <td>Sheikh Russel KC Vs Dacca United</td>
                <td class="text-danger">3-2 (L)</td>

        </tr>
        <tr>
            <td>22 January, 2021</td>
            <td>Bangladesh Premier League</td>
            <td>Dacca United Vs Rahmatganj FC</td>
            <td class="text-success">7-0 (W)</td>

    </tr>
        
      
      


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