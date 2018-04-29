<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 30/4/18
	 * Time: 12:06 AM
	 */
	
	
	//require_once(dirname(__FILE__) . '../conf/config.php');
	require_once('../conf/config.php');
	
	session_start();
	$dal = new DAL();
	$results = $dal->get_question_from_DB(2);
	$proceed = false;
	
	
	if ($results) {
		$proceed = true;
	} else {
		$proceed = false;
	}
	
	// check if there were any results
	if ($results) {
		echo "<ul>";
		
		// cycle through results
		foreach ($results as $que) {
			echo "<li>$que->ques</li> <li>$que->opt_1</li> <li>$que->opt_2</li> <li>$que->opt_3</li> <li>$que->opt_4</li> <li>$que->cor_opt</li>";
		echo BR . BR ;
		}
		echo "</ul>";
	} else {
		// Display a message concerning lack of data
		echo "<p>There is something Wrong in file showquiz.php.</p>";
	}


?>
