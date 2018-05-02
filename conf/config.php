<?php
	
	require_once(dirname(dirname(__FILE__)) . '/inc/class/DAL.php');
	//require_once(dirname(dirname(__FILE__)) . '/inc/class/InheritDAL.php');
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 27/4/18
	 * Time: 10:21 PM
	 */
	
	
	//The Following URL needs to changed when used on local connections
	$url = 'http://localhost/ideacc';
	
	// Database
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DB', 'users');
	define('BR', "<BR>");
	define('ROOT_URL', $url);
	

?>