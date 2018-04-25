<?
	
	session_start();
	
	
	if ($_SESSION['login'] == 0) {
		
		header('location:index.php');
		
	}
	
	require 'sql_class.php';
	require 'quizz_user_class.php';
	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		for ($i = 0; $i < user::$count; $i++) {
			
			$b[$i] = $_POST[$i];
			
			list($a[$i], $id[$i]) = explode("_", $b[$i]);
			
		}
		
		
		$respostas = new user();
		$respostas->check_question($a, $id);
		
	}

?>
<!DOCTYPE>
<html>

<head>
    <meta charset="iso-8859-15">
    <title>Teste a decorrer</title>
    <link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded' rel='stylesheet' type='text/css'>

    <style type="text/css">

        #main {

            width: 800px;
            margin: 40px auto;
            border: 2px black;
            border-radius: 2em;
            box-shadow: 0px 0px 30px rgba(48, 50, 50, 0.85);
            padding-bottom: 20px;

        }

        .ask {
            text-align: justify;
            padding: 20px;
            margin: 20px;
            font-size: 25px;
            font-family: 'Stint Ultra Expanded', cursive;

        }

        input {

            margin-left: 20px;

        }

        hr {

            margin: 30px 0 30px 0;

        }

        #center {
            text-align: center;
        }

    </style>

</head>

<body>


<div id="main">
	
	<?
		
		
		$perguntas = new user();
		$perguntas->display_questions();
		unset($perguntas);
	
	?>
</div>

</body>

</html>