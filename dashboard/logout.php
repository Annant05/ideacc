<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 30/4/18
	 * Time: 11:52 PM
	 */
	
	require_once('../conf/config.php');
	
	session_start();
	session_unset();
	session_destroy();
	ob_start();
	alert_and_redirect("SuccessFully Logged Out", ROOT_URL . "/index.html");
	
	//header("Location:" . ROOT_URL . "/login.php");
	exit();
?>

