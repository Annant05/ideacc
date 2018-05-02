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
	$_SESSION['start'] = true;
	$_SESSION['score'] = 0;
	
	
	$dal = new DAL();
	$results = $dal->get_question_from_DB(1);
	$proceed = false;
	
	if ($results) {
		$proceed = true;
	} else {
		$proceed = false;
	}
	
	// check if there were any results
	if ($results) {
		
		$ques = $results[0]->ques;
		$opt_A = $results[0]->opt_1;
		$opt_B = $results[0]->opt_2;
		$opt_C = $results[0]->opt_3;
		$opt_D = $results[0]->opt_4;
		$cor_opt = $results[0]->cor_opt;
		
		
		//echo "<ul>";
		
		// cycle through results
		//foreach ($results as $que) {
		//	echo "<li>$que->ques</li> <li>$que->opt_1</li> <li>$que->opt_2</li> <li>$que->opt_3</li> <li>$que->opt_4</li> <li>$que->cor_opt</li>";
		//echo BR . BR ;
		//}
		//echo "</ul>";
		
	} else {
		// Display a message concerning lack of data
		echo "<p>There is something Wrong in file showquiz.php.</p>";
	}


?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="../dashboard/view.css" media="all">
    <script type="text/javascript" src="../dashboard/view.js"></script>

</head>
<body id="main_body">
<div id="form_container">

    <h1><a>Quiz </a></h1>
    <form id="quiz" method="post" action="">
        <div class="form_description">
            <h2>Your Quiz </h2>
        </div>
        <ul>
            <br>
            <!--            <h3>Select Category</h3>-->
            <!--            <select id="sub_cat" name="sub_cat">-->
            <!--                <option value="dbms">DBMS</option>-->
            <!--                <option value="os">Operating System</option>-->
            <!--                <option value="cn">Computer Networks</option>-->
            <!--                <option value="html_css">HTML/CSS</option>-->
            <!--            </select>-->
            <br>

            <li id="li_1">
                <label class="description" for="element_1">Question </label>
                <div>
                    <p>
						<?php echo $ques; ?>
                    </p>
                </div>
            </li>
            <li id="li_2">
                <label class="description" for="element_2"></label>
                <div>

                    <input id="element_2" name="response" class="element textarea small" type="radio"
                           value=""><?php echo $opt_A; ?><br>
                </div>
            </li>
            <li id="li_3">
                <label class="description" for="element_3"></label>
                <div>
                    <input id="element_3" name="response" class="element textarea small" type="radio"
                           value=""><?php echo $opt_B; ?><br>
                </div>
            </li>
            <li id="li_4">
                <label class="description" for="element_4"> </label>
                <div>
                    <input id="element_4" name="response" class="element textarea small" type="radio"
                           value=""><?php echo $opt_C; ?><br>
                </div>
            </li>
            <li id="li_5">
                <label class="description" for="element_5"></label>
                <div>
                    <input id="element_5" name="response" class="element textarea small" type="radio"
                           value=""><?php echo $opt_D; ?><br>
                </div>
            </li>

            <li class="buttons">
                <input type="hidden" name="form_id" value="6060"/>

                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit"/>
            </li>
        </ul>

        <button class="login100-form-btn" type="submit">
            Next
        </button>
    </form>

</div>
<img id="bottom" src="../dashboard/bottom.png" alt="">
</body>
</html>
