<?php
	require 'connectdb.php';
	session_start();
	
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$_SESSION['username'] = $username;
		$password = md5($_POST['pass']);
		$count = (mysqli_query($connect, "SELECT count(*) from users_table WHERE Username='$username' AND password='$password';"));
		//$check_pass = $temp["Password"];
  
		if ($count) {//$check_pass == $password) {
			echo "Welcome $username !!!";
		} else {
			echo "Incorrect password ";
			die('Error: ' . mysqli_error($connect));
		}
	}
	mysqli_close($connect);
?>

<!--  TODO: Image not apperating.-> Add image
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>EduM Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title" style="margin-bottom: 20px">
						Sign In
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
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

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

                    <a href="sign_up.php" class="txt3">
                        Sign up now
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