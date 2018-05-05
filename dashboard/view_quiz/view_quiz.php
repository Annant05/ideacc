<?php
	require_once('../../conf/config.php');
	session_start();
	check_user_is_loggedin();
	echo $_SESSION['sub_cat'];

?>

<html>
<body>
<div>
	<?php echo "Gupta"; ?>
    <h3>HTML Stands for...</h3>

    <ol type="A">
        <li>
            <div>

                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"/>

                <label for="question-1-answers-A">A) Hypertext Markup Language </label>

            </div>

            <div>

                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"/>

                <label for="question-1-answers-B">B) Hypertext Markup</label>

            </div>

            <div>

                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C"/>

                <label for="question-1-answers-C">C) Hypertext Programming</label>

            </div>

            <div>

                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D"/>

                <label for="question-1-answers-D">D) None of the above</label>

            </div>
        </li>
    </ol>


</div>
</body>

</html>
