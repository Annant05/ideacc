<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 8:06 PM
	 */
	require 'QuestionDB.php';
	require 'connectdb.php';
	
	$firstQues = new QuestionDB($connection);
	$firstQues->addQuestion("What is your Name");
	$firstQues->addOptions("Annant", "Ankur", "Anna", "Chaman");
	$firstQues->correctOpt("Annant");
	//$firstQues->insertIntoDB();

?>
<html>
<body>
<?php $firstQues->getQuestionDB(); ?>
</body>
</html>
