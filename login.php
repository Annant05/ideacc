<?php
 //Login module working
 
	require 'connectdb.php';
	//ob_start();
	session_start();
	if (!empty($_POST)) {
		 $username = $_POST['username'];
		 $_SESSION['username'] = $username;
		 $password = md5($_POST['pass']);
		 $tbl_name = "users_table";
		 $query = "SELECT count(*) from $tbl_name WHERE Username='$username' AND password='$password';";
		//$check_pass = $temp["Password"];
		//$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
		
		
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	    //echo "\n The reuslt is = > ". $result;
        $count = mysqli_num_rows($result);
		
		if ($count == 1) {
			echo $_SESSION['username'] = $username;
		    header("Location:".$rootUrl. "/dashboard/index.html");
		} else {
			echo $fmsg = "Invalid Login Credentials.";
		}
	}
	
	/*
//	echo $DB = new PDO("mysql:host=$host;dbname=$database", $username, $password);
//	echo $res = $DB->query('SELECT count(*) from users_table WHERE Username=\'$username\' AND password=\'$password\';');
//	echo $num_rows = $res->fetchColumn();

// Mysql_num_row is counting table row
	//$count = mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
	if ($num_rows == 1) {
		echo "Success! $num_rows";
		//header("Location :".$rootUrl."/dashboard/index.html");
	} else {
		echo "Unsuccessful! $num_rows";
	}
	
	//ob_end_flush();
}*/
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
					<span class="login100-form-title">
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

                <div class="flex-col-c p-t-120 p-b-40">
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