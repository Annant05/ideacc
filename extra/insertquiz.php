<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 8:06 PM
	 */
	require '../../inc/customclass/QuizClass.php';
	require 'connectdb.php';
	require_once('../../conf/config.php');
	include('../../inc/class/SharedFunctions.php');
	
	
	if (!empty($_POST)) {
		//echo "Inside POST IF <br>";
		$firstQues = new QuizClass($connection);
		$firstQues->setQuestion($_POST['question']);
		$firstQues->setOptions($_POST['opt_1'], $_POST['opt_2'], $_POST['opt_3'], $_POST['opt_4']);
		$firstQues->setCorrectOption($_POST['crct_opt']);
		//$firstQues->
		$res = $firstQues->insertIntoDB();
		//$firstQues->getQuestionDB();
        if($res){
            alert_only_out("Insert Complete");
        }
	}

?>

<html>
<body>
<form method="post">

    <div>
        Input Question <input type="text" name="question" required>
        <br>
    </div>

    <div>
        Input Option A <input type="text" name="opt_1" required>
        <br>
    </div>

    <div>
        Input Option B <input type="text" name="opt_2" required>
        <br>
    </div>

    <div>
        Input Option C <input type="text" name="opt_3" required>
        <br>
    </div>

    <div>
        Input Option D <input type="text" name="opt_4" required>
        <br>
    </div>

    <div>
        Enter Correct Option <input type="text" name="crct_opt" required>
        <br>
    </div>


    <div>
        <button type="submit">
            Submit to db
        </button>
    </div>

</form>
</body>
</html>
