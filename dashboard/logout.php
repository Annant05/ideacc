<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 30/4/18
	 * Time: 11:52 PM
	 */
	
	require_once('../conf/config.php');
	require_once('../inc/class/SharedFunctions.php');
	$SF = new SharedFunctions();
	session_start();
	session_unset();
	session_destroy();
	ob_start();
	$SF->alert_and_redirect("SuccessFully Logged Out");
	
	//header("Location:" . ROOT_URL . "/login.php");
	exit();
?>

