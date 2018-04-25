<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 8:06 PM
	 */
	require 'QuestionDB.php';
	require 'connectdb.php';
	if (!empty($_POST)) {
		echo "Inside POST IF <br>";
		$firstQues = new QuestionDB($connection);
		$firstQues->addQuestion($_POST['question']);
		$firstQues->addOptions($_POST['opt_1'], $_POST['opt_2'], $_POST['opt_3'], $_POST['opt_4']);
		$firstQues->correctOpt($_POST['crct_opt']);
		$firstQues->insertIntoDB();
	}
?>
<html>
<body>
<form method="post">

    <div>
        Input Question <input type="text" name="question">
        <br>
    </div>

    <div>
        Input Option 1 <input type="text" name="opt_1">
        <br>
    </div>

    <div>
        Input Option 1 <input type="text" name="opt_2">
        <br>
    </div>

    <div>
        Input Option 1 <input type="text" name="opt_3">
        <br>
    </div>

    <div>
        Input Option 1 <input type="text" name="opt_4">
        <br>
    </div>

    <div>
        Input Option 1 <input type="text" name="crct_opt">
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