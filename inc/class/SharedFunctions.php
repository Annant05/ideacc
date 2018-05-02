<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 2/5/18
	 * Time: 5:43 PM
	 */
	
	class SharedFunctions
	{
		public function alert($msg)
		{
			echo "<script>
    			alert('$msg');
    			window.location.href='http://localhost/ideacc/index.html';
   				 </script>";
			
		}
	}

?>