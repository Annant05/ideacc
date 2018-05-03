<?php
	
	require 'conf/connectdb.php';
	require 'inc/customclass/SignUpClass.php';
	require_once(dirname(__FILE__) . '/conf/config.php');
	include('inc/class/SharedFunctions.php');
	
	session_start();
	
	//$alert = $func->alert_only();
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['pass']);
		$confPass = md5($_POST['confPass']);
		$usertype = $_POST['usertype'];
		$section = $_POST['section'];
		
		$dal = new DAL();
		$signup = new signUpClass($connection);
		
		
		function isUserValid($check_user_email, $_email, $_username)
		{
			if ($check_user_email) {  // Check if user Aleready Exists and notify
				if (($check_user_email[0]->email === $_email) && ($check_user_email[0]->username === $_username)) {
					$msg = "$_username Already Exists with Email: $_email ";
					alert_only_out($msg);
					return false;
				} else if (($check_user_email[0]->username === $_username)) {
					$msg = "$_username Already Exists";
					alert_only_out($msg);
					return false;
				} else if (($check_user_email[0]->email === $_email)) {
					$msg = "$_email Already Exists";
					alert_only_out($msg);
					return false;
				} else {
					//$msg = "UserCan be created";
					//alert_only_out($msg);
					return true;
				}
			}
			return true;
		}
		
		if ($usertype === "student") {
			$result = $dal->signup_check_student_email_in_DB($username, $email);
			if (isUserValid($result, $email, $username)) {
				$signup->signUpStudent($name, $username, $email, $password, $confPass, $section);
			}
		} else if ($usertype === "instructor") {
			$result = $dal->signup_check_instructor_email_in_DB($username, $email);
			if (isUserValid($result, $email, $username)) {
				$signup->signUpInstructor($name, $username, $email, $password, $confPass);
			}
		} else {
			$msg = "Something went Wrong in Signup.php";
			alert_only_out($msg);
		}
		$_SESSION['name'] = $username;
		//sheader("Location:" . ROOT_URL . "/dashboard/index_ins.php");
		//}
		//$connection->close();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    <input class="input100" type="text" name="username" required>
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Incorrect Passsword">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass" required>
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password do not match!">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="confPass" required>
                    <span class="focus-input100" data-placeholder="Confirm Password"></span>
                </div>


                <div>
                    <label> <input type='radio' name='usertype' value='student' required> Student</label>
                    <label> <input style="margin-left: 20px" type='radio' name='usertype' value='instructor' required>
                        Instructor </label>
                </div>

                <div class="form-group" style="margin-bottom: 20px ;margin-top: 10px">
                    <label>Select Section</label>
                    <select id="section" name="section">
                        <option value="CS-1">CS-1</option>
                        <option value="CS-2">CS-2</option>
                        <option value="CS-3">CS-3</option>
                        <option value="CS-4">CS-4</option>
                    </select>
                </div>


                <!--                <div class="g-recaptcha" data-sitekey="6LfoMFUUAAAAAMKfbM5xYJjzB6GWwSuTBeQewQ_F"></div>-->
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