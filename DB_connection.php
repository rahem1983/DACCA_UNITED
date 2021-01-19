<?php 

	$connected = mysqli_connect('localhost', 'rahem', 'RHM', 'dacca_united');
	if(!$connected){
		die("Connection Failed:" . mysqli_connect_error());
	}
	