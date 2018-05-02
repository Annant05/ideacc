<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 2/5/18
	 * Time: 5:43 PM
	 */
	
	class SharedFunctions
	{
		public function alert_and_redirect($msg)
		{
			echo "<script>
    			alert('$msg');
    			window.location.href='http://localhost/ideacc/index.html';
   				 </script>";
			
		}
		
		public function alert_only($msg)
		{
			echo "<script>
    			alert('$msg');
   				 </script>";
			
		}
		
	}
	
	function alert_only_out($msg)
	{
		echo "<script>
    			alert('$msg');
   				 </script>";
		
	}

?>