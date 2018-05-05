<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 2/5/18
	 * Time: 5:43 PM
	 */
	
	function alert_and_redirect($msg, $url)
	{
		echo "<script>
    			alert('$msg');
    			window.location.href='$url';
   				 </script>";
		
	}
	
	
	function alert_only_out($msg)
	{
		echo "<script>
    			alert('$msg');
   				 </script>";
	}
	
	function check_user_is_instructor()
	{
		$usertype = $_SESSION['usertype'];
		if ($usertype !== INSTRUCTOR) {
			alert_and_redirect("Please Log in", ROOT_URL . "/login.php");
		}
	}
	
	
	function check_user_is_student()
	{
		$usertype = $_SESSION['usertype'];
		if ($usertype !== STUDENT) {
			alert_and_redirect("Please Log in", ROOT_URL . "/login.php");
		}
		
	}
	
	function check_user_is_loggedin()
	{
		$usertype = $_SESSION['usertype'];
		if (!($usertype === STUDENT || $usertype === INSTRUCTOR)) {
			alert_and_redirect("Please Log in", ROOT_URL . "/login.php");
		}
	}

?>