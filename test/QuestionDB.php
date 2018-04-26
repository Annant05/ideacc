<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 7:51 PM
	 */
	
	//require '../connectdb.php';
	
	class QuestionDB
	{
		
		private $br = "<BR>";
		private $question;
		private $option_1;
		private $option_2;
		private $option_3;
		private $option_4;
		private $correct_option;
		private $connection;
		
		public function __construct($connect)
		{
			$this->connection = $connect;
		}
		
		// Related to Database
		private $table_name = "questions";
		
		public function addQuestion($ques)
		{
			$this->question = $ques;
		}
		
		public function addOptions($opt1, $opt2, $opt3, $opt4)
		{
			$this->option_1 = $opt1;
			$this->option_2 = $opt2;
			$this->option_3 = $opt3;
			$this->option_4 = $opt4;
		}
		
		public function correctOpt($correct)
		{
			$this->correct_option = $correct;
		}
		
		
		public function insertIntoDB()
		{
			$sql_query = "Insert into $this->table_name(question,option_1,option_2,option_3,option_4,correct_option)
						  values('$this->question','$this->option_1','$this->option_2','$this->option_3','$this->option_4','$this->correct_option');";
			$res = $this->connection->query($sql_query);
			echo "Insert Complete";
			$this->connection->close();
		}
		
		
		public function getQuestionDB()
		{
			//echo $sql = "select question from $this->table_name where qid = 0;";
			//echo $result = $this->connection->query($sql);
			
			echo $question = "notjing";
			echo $this->br;
			echo $get_ques = "SELECT question from $this->table_name ORDER BY RAND() limit 1";
			echo $this->br;
			echo $res_que = $this->connection->query($get_ques);
			echo $this->br;
			echo $res_que->num_rows;
			if ($res_que->num_rows == 1) {
				// output data of each row
				while ($row = $res_que->fetch_assoc()) {
					echo $question = $row["question"];
					echo $this->br;
				}
			} else {
				echo "0 results";
			}
			//return $question;
		}
		
		/*
		public function returnDataAry()
		{
			$out['question'] =
			$out['opt_1'] =
			$out['opt_2'] =
			$out['opt_3'] =
			$out['opt_4'] =
			$out['opt_corr'] =
						return
					}
	*/
		
		
		/*		public function echoEverything()
				
				{
					/*  $this->question;
						//$this->br;
						$this->option_1;
						//$this->br;
						$this->option_2;
						//$this->br;
						$this->option_3;
						//$this->br;
						$this->option_4;
						//$this->br;
						//echo "Correct Option" . "$this->correct_option";
					*/
		//	}
	}