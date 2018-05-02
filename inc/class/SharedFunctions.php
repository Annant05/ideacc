<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 2/5/18
	 * Time: 5:43 PM
	 */
	
	function alert_and_redirect($msg,$url)
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

?>