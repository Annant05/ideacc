<?
	session_start();
	
	require 'sql_class.php';
	require 'user.php';
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			echo "Invalid Email";
			
		} else {
			
			$user = new user();
			
			if ($user->new_user($nome, $email) == true) {
				
				echo "vamos lÃ¡ comeÃ§ar";
				unset($user);
				$_SESSION['login'] = 1;
				header('location:quizelse.php');
			}
		}
		
	}

?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" >
	<title>Index Quiz</title>
	<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#login{
			font-family: 'Stint Ultra Expanded', cursive;
			width: 400px;
			height: 300px;
			margin: 200px auto;
			border: 2px black;
			border-radius:2em;
			box-shadow: 0px 0px 30px rgba(48, 50, 50, 0.85);
		}
		form{
			padding-top: 70px;
			
		}
		input{
			width: 300px;
			float: right;
			
		}
	</style>
</head>
<body>
<div id="login">
	<form method="POST">
		<fieldset>
			<legend>Register your quizz width: </legend>
			<p><label>Name:</label>
				<input type="text" maxlength="10" name="nome" required>
			</p>
			<p>
				<label>Email: </label><input type="text" name="email" required>
			</p>
		</fieldset>
		<br>
		<p align="center"><input type="submit" value="Let's Start"></p>
	</form>
</div>
</body>
</html>