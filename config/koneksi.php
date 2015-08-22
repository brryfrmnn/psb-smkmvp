<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "tapendaftaran";
	$mysqli = new mysqli($server, $user, $password, $db);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	$mysqli->set_charset("utf8");
			
 ?>