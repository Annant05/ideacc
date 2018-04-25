<?php
	
	require 'connectdb.php';
	echo $tbl_name = "users_table";
	
	
	$get_name = "SELECT * from $tbl_name WHERE username = '$username'";
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
	/*header("Location:" . $rootUrl . "/dashboard/index.php");
	} else {
	echo "0 results";
	}
$connection->close();

//function getQuestionDB()
//{
//echo $sql = "select question from $this->table_name where qid = 0;";
//echo $result = $this->connection->query($sql);
//	global $table_name;
//	global $connection;
//global $br;
/*	echo $question = "notjing";
echo "<br>";
echo $get_ques = "SELECT question from $table_name WHERE qid = 1";
//echo $this->br;
echo $res_que = $connection->query($get_ques);
//echo $this->br;
//echo $res_que->num_rows;

//if ($res_que->num_rows == 1) {
// output data of each row
while ($row = $res_que->fetch_row()) {
	echo $question = $row["question"];
	echo "<br>";
}
//} else {
echo "0 results";
//	}
//return $question;
//}

//	getQuestionDB();
*/

?>

