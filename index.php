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
 <body bgcolor="#ECF0F1" >
 	<br><br><br>
 <h1 align="center", style="color:#570202"><?php 
	// $id = 10;
	// $string = array('hasan', 'pasan', 'zasan');
	// print_r($string);
	//include 'hellowrafin.html';

 ?></h1>
 <div>
 	<h1>
 		<?php
 		$sql= 'SELECT * FROM user;';
	$result = mysqli_query($connected, $sql);
	$fans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	 foreach ($fans as $emple) { ?>
 			<h1><?php echo htmlspecialchars($emple['password']),"->",htmlspecialchars($emple['name']); ?></h1>
 			<h1><?php echo "next is "; ?></h1><br><br>
 		<?php } ?>
 	</h1>
 </div>
<div class="bg-dark">
	<table class="table table-bordered text-center text-white">
    <thead class="thead">
        <tr>

            <th>name</th>
            <th>email</th>
            <!-- <th>Home Vs Away</th>
            <th>Ticket</th> -->  
        </tr>
    </thead>
    <tbody>
            
                <?php
                    $sql= 'SELECT * FROM user;';
                    $result = mysqli_query($connected, $sql);
                    
                    while ($fans = mysqli_fetch_assoc($result)) {?>
                        <tr>
                                <td><?php echo "$fans[name]"; ?></td>
                                <td><?php echo "$fans[email]";?></td>
                                <td class="float-right">
                                <a class="btn btn-outline-warning" href="">Buy Ticket</a>
                                </td>

                            </tr>
                    <?php }
                ?>

            
           <!--  <tr>
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

	</tr> --> 
    </tbody>
</table>
</div>
 <form action="#">
 <button type="submit" name="submit" >submit</button>
 </form>

  <?php 
  	include 'footer.php';
   ?>
 </body>
 </html>