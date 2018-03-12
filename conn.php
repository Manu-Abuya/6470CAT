<?php 
session_start();
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbName = "6470";
	$conn = mysqli_connect($server, $user, $password, $dbName);

	if (!$conn) {
		die("Database connection failed : " .mysqli_connect_error());
	} else{
		echo "<h2>Successful connection</h2>";
	}
 ?>