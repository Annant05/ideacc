<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 30/4/18
	 * Time: 11:52 PM
	 */
	session_start();
	session_unset();
	session_destroy();
	ob_start();
	header("Location:" . ROOT_URL . "index.html");
	exit();
?>
<html>
Hello
</html>
