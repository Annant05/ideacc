<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $dbname = 'accweb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   

if(!empty($_POST)) 
{  
 $question=$_POST['question'];
 $answer=$_POST['corr_ans'];
 $opt_a =$_POST['option_a'];
 $opt_b =$_POST['option_b'];
 $opt_c =$_POST['option_c'];
 $opt_d =$_POST['option_d'];
 $table=$_POST['sub_cat'];
    
//Execute the query for insertion
 $sql = "INSERT INTO `$table`(ques,answer,opt_a,opt_b,opt_c,opt_d) VALUES('$question','$answer','$opt_a','$opt_b','$opt_c','$opt_d')";
    
 if (mysqli_query($conn,$sql))
 {
  echo "Succesful";
  }
else {
    die('Error: ' . mysqli_error($conn));
    }

} 


mysqli_close($conn);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Quiz Upload</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" style="background-color:#50F018;" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container" style="background-color:#91EE0A;">
	
		<h1><a>Quiz Upload</a></h1>
		<form id="form_6060" class="appnitro" style="background-color:#91EE0A;" method="post" action="">
					<div class="form_description" >
			<h2>Quiz Upload</h2>
            <br>
                        <h3>Select Category</h3>
             <select id = "sub_cat" name = "sub_cat">
               <option value = "dbms">DBMS</option>
               <option value = "os">Operating System</option>
               <option value = "cn">Computer Networks</option>
               <option value = "html_css">HTML/CSS</option>
             </select>
            <br>
                        <br>
			<h4>Enter questions with 4 options.. </h4>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Question </label>
		<div>
			<textarea id="element_1" name="question" class="element textarea small"></textarea> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Option A </label>
		<div>
			<input id="element_2" name="option_a" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Option B </label>
		<div>
			<input id="element_3" name="option_b" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Option C </label>
		<div>
			<input id="element_4" name="option_c" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Option D </label>
		<div>
			<input id="element_5" name="option_d" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>       <li id="li_6" >
        <label class="description" for="element_6">Correct option </label>
		<div>
			<input id="element_6" name="corr_ans" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>    
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="6060" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
