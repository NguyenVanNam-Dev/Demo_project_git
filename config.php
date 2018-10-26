<?php
	//file congif.php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "db_eyesight_3";
	$db = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($db,"UTF8");
?>