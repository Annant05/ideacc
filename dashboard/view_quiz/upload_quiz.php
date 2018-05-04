<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 8:06 PM
	 */
	
	require_once('../../conf/config.php');
	
	$dal = new DAL;
	$subject = "6006";
	if (!empty($_POST)) {
		$res = $dal->insert_quiz_question($_POST['question'], $_POST['opt_A'], $_POST['opt_B'], $_POST['opt_C'], $_POST['opt_D'], $_POST['correct'], $subject);
		if ($res) {
        alert_only_out("insert Complete");
		}else{
		    alert_only_out("Error");
        }
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>EduM Home</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css"/>

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>


</head>

<body>
<!-- Header -->
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- home wrapper -->

    <div class="container">
        <div class="row">

            <div class="container">
                <h2>Insert Quiz</h2>
                <form method="post" name>

                    <div class="form-group form-actions">

                        <div class="form-group col-xs-12">
                            <label>Question</label>
                            <input type="text" class="form-control" id="question" placeholder="Enter Question"
                                   name="question">
                        </div>

                        <div class="form-group col-xs-6">
                            <label>Option A</label>
                            <input type="text" class="form-control" id="opt_A" placeholder="Enter Option" name="opt_A">
                        </div>

                        <div class="form-group col-xs-6">
                            <label>Option B</label>
                            <input type="text" class="form-control" id="opt_B" placeholder="Enter Option" name="opt_B">
                        </div>

                        <div class="form-group col-xs-6">
                            <label>Option C</label>
                            <input type="text" class="form-control" id="opt_C" placeholder="Enter Option" name="opt_C">
                        </div>

                        <div class="form-group col-xs-6">
                            <label>Option D</label>
                            <input type="text" class="form-control" id="opt_D" placeholder="Enter Option" name="opt_D">
                        </div>

                    </div>

                    <div class="form-group col-xs-6">
                        <label>Correct</label>
                        <input type="text" class="form-control" id="correct" placeholder="Enter Option" name="opt_D">
                    </div>

                    <button type="submit" class="btn btn-default center-block m-t-15">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /home wrapper -->

</header>
<!-- /Header -->


</body>

</html>
