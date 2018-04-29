<?php
	//require 'connectdb.php';
	require_once(dirname(__FILE__) . '/conf/config.php');
	
	session_start();
	$dal = new DAL();
	
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$password = md5($_POST['pass']);
		
		$results = $dal->check_for_the_user_in_DB($username, $password);
		//echo BR;
		if ($results) {
			if (($results[0]->username === $username) && ($results[0]->pass === $password)) {
				//echo BR . "Evrythin is fine";
				$_SESSION['name'] = $results[0]->name;
				header("Location:" . ROOT_URL . "/dashboard/index.php");
				//$_SESSION['name'] =
			}
		} else {
			echo BR . "Username or Password Wrong";
		}
		
	}
	//$tbl_name = "users_table";
	
	//$sql = "SELECT count(*) from $tbl_name WHERE username = '$username' AND password = '$password'";
	//$result = $connection->query($sql);
	
	/*if ($result->num_rows == 1) {
			// output data of each row
			$_SESSION['username'] = $username;
			$get_name = "SELECT name from $tbl_name WHERE username = '$username'";
			$res_name = $connection->query($get_name);
			
			
			if ($res_name->num_rows == 1) {
				// output data of each row
				while ($row = $res_name->fetch_assoc()) {
					$_SESSION['name'] = $row["name"];
				}
			} else {
				echo "0 results";
			}
			//$_SESSION['name'] = $name;
			header("Location:" . $rootUrl . "/dashboard/index.php");
		} else {
			echo "0 results";
		}
		$connection->close();
	}*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accelerator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
						Login
					</span>
                <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                <div class="wrap-input100 validate-input" data-validate="Incorrect Username">
                    <input class="input100" type="text" name="username" title="username">
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Incorrect Passsword">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass" title="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

                    <a class="txt2" href="sign_up.php">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

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