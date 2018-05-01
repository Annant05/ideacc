<?php
	
    //Dynamically showing Subject category //
	//TODO: Session handling Remaining;
	
	
	require_once('../conf/config.php');
	
	$dal = new DAL();
	$results = $dal->get_subject_categories_from_DB();
	
	if ($results) {
		$resarray = $results;
	} else {
		echo "Something Wrong";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Accelerator</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/owl.theme.default.css"/>

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/stylechoose.css"/>


</head>

<body>
<!-- Header -->
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./images/background2.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->


    <!-- home wrapper -->
    <div class="home-wrapper">
        <div class="container">
            <div class="row">

                <!-- home content -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-content">
                        <h1 class="white-text">You are all set to start!</h1>
                        <p class="white-text"> Select the type of quiz you want to get started with...
                        </p>
                        <!--<select class="white-btn">Choose Quiz-->
                        <!--<option>Physics</option>-->
                        <!--<option>Life Sciences</option>-->
                        <!--<option>General Knowledge</option>-->
                        <!--<option>English</option>-->
                        <!--</select>-->
                        <!---->
						<?php echo '<select class="white-btn" id = "sub_cat" name ="sub_cat">';
							foreach ($resarray as $sub) {
								//$sub = array('ACA','DBMS');
								//for($i = 0;$i<2;$i++){
								echo '<option value="' . $sub->subject . '">' . $sub->subject . '</option>';
							}
							echo '</select>';
						?>

                        <button class="main-btn">Kick Start!</button>


                    </div>
                </div>
                <!-- /home content -->

            </div>
        </div>
    </div>
    <!-- /home wrapper -->

</header>
<!-- /Header -->


</body>

</html>
