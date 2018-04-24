<?php
// File to Connect to MySql DB
	
	//essentials
	//$rootUrl = "http://localhost/ideacc";
	$rootUrl = "http://localhost/ideacc";
	$br = "<br>";
	
	// all DB related
	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$database = 'users';
	
	
	//$connect=mysqli_connect("$host","$user","$password","$database");
	$connection = new mysqli($host, $user, $password, $database);
	// Check connection
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
	
	
	
/*	if (mysqli_connect_errno($connect)) {
		echo 'Failed to connect';
		echo mysqli_connect_errno($connect);
	}
*/
?>