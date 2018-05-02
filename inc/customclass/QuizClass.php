<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 25/4/18
	 * Time: 7:51 PM
	 */
	
	//require '../connectdb.php';
	
	//require_once('../inc/class/InheritDAL.php');
	
	class QuizClass
	{
		
		
		private $br = "<BR>";
		private $question;
		private $option_A;
		private $option_B;
		private $option_C;
		private $option_D;
		private $correct_option;
		private $connection;
		private $table_name = "quiz_ques";
		private $subject = "CS6002";
		
		
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
			return $this->option_A;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption2()
		{
			return $this->option_B;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption3()
		{
			return $this->option_C;
		}
		
		/**
		 * @return mixed
		 */
		public function getOption4()
		{
			return $this->option_D;
		}
		
		/**
		 * @return mixed
		 */
		public function getCorrectOption()
		{
			return $this->correct_option;
		}
		
		
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
			$this->option_A = $opt1;
			$this->option_B = $opt2;
			$this->option_C = $opt3;
			$this->option_D = $opt4;
		}
		
		public function setCorrectOption($correct)
		{
			$this->correct_option = $correct;
		}
		
		public function insertIntoDB()
		{
			$sql_query = "INSERT into quiz_ques(question,opt_A,opt_B,opt_C,opt_D,corr_opt,sub_id)
						  values('$this->question','$this->option_A','$this->option_B','$this->option_C','$this->option_D','$this->correct_option','$this->subject');";
			$res = $this->connection->query($sql_query);
			echo "Insert Complete";
			$this->connection->close();
		}
		
		/**
		 * @return mixed
		 */
		
	}