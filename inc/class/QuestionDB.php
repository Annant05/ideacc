<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 7:51 PM
	 */
	
	//require '../connectdb.php';
	
	require_once('InheritDAL.php');
	
	class QuestionDB extends InheritDAL
	{
		/**
		 * @return mixed
		 */
		public function getQuestion()
		{
			return $this->question;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption1()
		{
			return $this->option_1;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption2()
		{
			return $this->option_2;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption3()
		{
			return $this->option_3;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption4()
		{
			return $this->option_4;
		}
		
		/**
		 * @return mixed
		 */
		public function getCorrectOption()
		{
			return $this->correct_option;
		}
		
		
		private $br = "<BR>";
		private $question;
		private $option_1;
		private $option_2;
		private $option_3;
		private $option_4;
		private $correct_option;
		private $connection;
		private $table_name = "questions";
		
		
		public function __construct($conn)
		{
			$this->connection = $conn;
		}
		
		// Related to Database
		
		
		public function setQuestion($ques)
		{
			$this->question = $ques;
		}
		
		public function setOptions($opt1, $opt2, $opt3, $opt4)
		{
			$this->option_1 = $opt1;
			$this->option_2 = $opt2;
			$this->option_3 = $opt3;
			$this->option_4 = $opt4;
		}
		
		public function setCorrectOption($correct)
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
		
		/**
		 * @return mixed
		 */
		
	}