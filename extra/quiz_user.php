<?php
	//
	// $dbhost = 'localhost';
	//   $dbuser = 'root';
	//   $dbpass = 'root';
	//   $dbname = 'accweb';
	//   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	//
	
	//require('../conf/connectdb.php');
	require_once(dirname(__FILE__) . '../conf/config.php');
	
	$dal = new DAL();
	echo $question = $dal->get_question_from_DB(1);
	$ques = $question[0]->ques;
	$opt_A = $question[0]->opt_1;
	$opt_B = $question[0]->opt_2;
	$opt_C = $question[0]->opt_3;
	$opt_D = $question[0]->opt_4;
	$cor_opt = $question[0]->cor_opt;
	
	
	
	
	//    $conn = $connection;
	//    if(! $conn ) {
	//      die('Could not connect: ' . mysqli_error());
	//   }
	//if(isset($_POST['sun_cat']))
	//{
	//
	//$score=0;
	//// Load new question to ask to the user
	////$get_question = "SELECT * from questions order by rand() limit 1";
	//$result_get_question = mysqli_query($conn,$get_question);
	//$row_get_question = mysqli_fetch_assoc($result_get_question);
	//
	//// assign thing we want to print in the template to variable
	//$que_id = $row_get_question['qid'];
	//$question = $row_get_question['question'];
	//$correct = $row_get_question['correct_option'];
	//$get_option = " SELECT * from questions WHERE qid = $que_id ";
	//$result_get_option = mysqli_query($conn,$get_option);
	//$row_get_option = mysqli_fetch_assoc($result_get_option);
	
//	$a1 = "Annant";      //$row_get_option['opt_1'];
//	$a2 = "Ankit";     //$row_get_option['opt_2'];
//	$a3 = "Anubhav";    //$row_get_option['opt_3'];
//	$a4 = "Anna";   //$row_get_option['opt_4'];
	//
	//if (isset($_POST['response'])) {
	//
	//    // Query database
	//
	//    $selected_radio = $_POST['response'];
	//
	//    if ($selected_radio == $correct)
	//        $score++;
	//}
	//}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Quiz Upload</title>
    <link rel="stylesheet" type="text/css" href="../dashboard/view.css" media="all">
    <script type="text/javascript" src="../dashboard/view.js"></script>

</head>
<body id="main_body">

<div id="form_container">

    <h1><a>Quiz Upload</a></h1>
    <form id="form_6060" class="appnitro" method="post" action="">
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
    </form>

</div>
<img id="bottom" src="../dashboard/bottom.png" alt="">
</body>
</html>
