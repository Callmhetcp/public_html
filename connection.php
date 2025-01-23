<?php 

	$server = 'localhost';
	$username = 'oceahjlt_oceanfortune_db';
	$password = 'oceanfortune_db';
	$db = 'oceahjlt_oceanfortune_db';



	$conn = mysqli_connect($server, $username, $password, $db);

	if (!$conn) {
		die('connection error!');
	}
 

 ?>