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
	alert("Successfully Logged out!");
	
	function alert($msg)
	{
		echo "<script type='text/javascript'>alert('$msg'); delay(1500);</script>";
	}
	
	header("Location:" . ROOT_URL . "/index.html");
	
	exit();
?>
<html>
Hello
</html>
