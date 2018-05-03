<?php
// File to Connect to MySql DB
	
	include('config.php');
	// all DB related
	$host = DB_HOST;
	$user = DB_USER;
	$password = DB_PASSWORD;
	$database = DB_DB;
	$database = DB_DB;
	
	$connection = new mysqli($host, $user, $password, $database);
	// Check connection
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
	
?>