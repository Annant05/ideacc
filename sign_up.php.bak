<!DOCTYPE html>
<?php
	//Complete With basic Functions
	require 'connectdb.php';
	session_start();
	
	//	require 'connectdb.php';
	//	session_start();
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['pass']);
		//	$proccedToNextPage = false;
		$tbl_name = "users_table";
		
		$createUser = "INSERT INTO $tbl_name VALUES ('$username','$email','$name','$password')";
		//$sql = "SELECT count(*) from $tbl_name WHERE username = '$username' AND password = '$password'";
		
		if ($connection->query($createUser)) {
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $name;
			header("Location:" . $rootUrl . "/dashboard/index.php");
		} else {
			die('Error: ' . $connection->errno);
		}
		$connection->close();
	}
	
	/*
		if (!empty($_POST)) {
			//Execute the query
			//$createTable = "CREATE TABLE IF NOT EXISTS users_table(username varchar(15) primary key not null unique,email varchar(30) not null unique,name varchar(30) not null,password varchar(15) primary key not null);";
			//	mysqli_query($connect,$createTable);
			if (mysqli_query($connect,  {
				$_SESSION['username'] = $username;
			$GLOBALS['proccedToNextPage'] = true;
		} else {
				die('Error: ' . mysqli_error($connect));
				
			}
			//echo $que = mysqli_query($connect,$query);
		}
		mysqli_close($connect);
		if ($GLOBALS['proccedToNextPage']) {
	*/

?>


<html lang="en">
<head>
    <title>EduM Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util_login.css">
    <link rel="stylesheet" type="text/css" href="css/main_login.css">
    <!--===============================================================================================-->

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<!--a href="test_php.php">GO to next page</a-->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-78">
					<span class="login100-form-title">
						Sign up
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Name">
                    <input class="input100" type="text" name="name" placeholder="Name" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="username" placeholder="Username" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password" required>
                    <span class="focus-input100"></span>
                </div>


                <div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

                    <a href="#" class="txt2">
                        Username / Password?
                    </a>
                </div>
                <!--button
                        class="g-recaptcha"
                        data-sitekey="6Lcm61MUAAAAAL-MvfzlwkxGYHpzecraaFWz5yXr"
                        data-callback="YourOnSubmitFn">

                </button-->

                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" value="Sign Up">

                </div>

                <div class="flex-col-c p-t-70 p-b-40">
						<span class="txt1 p-b-9">
							Already have account?
						</span>

                    <a href="login.php" class="txt3">
                        Login now!
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>