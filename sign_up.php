<?php
	
	require 'connectdb.php';
	session_start();
	
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = ($_POST['pass']);
		$confPass = ($_POST['confPass']);
		$tbl_name = "users_table";
		strcmp($password, $confPass);
		
		if (!(strcmp($password, $confPass))) {
			$password = md5($password);
			$createUser = "INSERT INTO $tbl_name VALUES ('$username','$email','$name','$password')";
		}
		if ($connection->query($createUser)) {
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $name;
			header("Location:" . $rootUrl . "/dashboard/index.php");
		} else {
			die('Error: ' . $connection->errno);
		}
		$connection->close();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accelerator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Signup
					</span>
                <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
                <!--form id="identicalForm" method="post">
                    -->
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="name">
                    <span class="focus-input100" data-placeholder="Name"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Incorrect Email">
                    <input class="input100" type="email" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <!--div class="form-group">
					<label for="sel1">Select Class</label>
					<select class="form-control" id="sel1">
						<option>CS</option>
						<option>IT</option>
						<option>EC</option>
						<option>CE</option>
						<option>ME</option>
					</select>
				</div-->


                <div class="wrap-input100 validate-input" data-validate="Incorrect Username">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Incorrect Passsword">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password do not match!">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="confPass">
                    <span class="focus-input100" data-placeholder="Confirm Password"></span>
                </div>

                <div class="g-recaptcha" data-sitekey="6LfoMFUUAAAAAMKfbM5xYJjzB6GWwSuTBeQewQ_F"></div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Sign Me Up!
                        </button>
                    </div>
                </div>
                <!--/form-->

                <div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

                    <a class="txt2" href="login.php">
                        Log In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script>
    $(document).ready(function () {
        $('#identicalForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                confirmPassword: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'Passwords do not match!'
                        }
                    }
                }
            }
        });
    });
</script>

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