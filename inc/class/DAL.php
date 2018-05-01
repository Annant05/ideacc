<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 29/4/18
	 * Time: 2:13 PM
	 */
	
	// As Of now this DAL is for Login Only
	
	
	class DALQueryResult
	{
		private $_results = array();
		
		public function __construct() { }
		
		public function __set($name, $value)
		{
			$this->_results[$name] = $value;
		}
		
		public function __get($name)
		{
			if (isset($this->_results[$name])) {
				return $this->_results[$name];
			} else {
				return null;
			}
		}
		
	}
	
	
	class DAL
	{
		public function __construct() { }
		
		//TODO: Always Remeber to Have SELECT AND FROM IN UPPER CASE
		// Below Are my Methods
		public function check_for_the_user_in_DB($username, $password)
		{
			/** @noinspection SqlNoDataSourceInspection */
			/** @noinspection SqlResolve */
			$sql_user_pass = "SELECT username as username , password as pass,name as name,email as email  FROM users_table WHERE username='$username' and password='$password'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_pass);
		}
		
		public function check_username_email_in_DB($username, $email)
		{
			/** @noinspection SqlNoDataSourceInspection */
			/** @noinspection SqlResolve */
			$sql_user_email = "SELECT username as username ,email as email  FROM users_table WHERE username='$username' OR email='$email'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_email);
		}
		
		
		public function get_question_from_DB($limit_val)
		{
			/** @noinspection SqlResolve */
			$sql_get_question = "SELECT question as ques, option_1 as opt_1,option_2 as opt_2,option_3 as opt_3,option_4 as opt_4,correct_option as cor_opt  FROM questions order by RAND()  limit $limit_val";
			return $this->query($sql_get_question);
		}
		
		
		public function get_subject_categories_from_DB()
		{
			
			/** @noinspection SqlResolve */
			$sql_cat = "SELECT cname as subject from sub_category order by cname asc ";
			return $this->query($sql_cat);
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		// Do not edit this Block
		
		private function query($sql)
		{
			
			$conn = $this->dbconnect();
			$res = mysqli_query($conn, $sql);
			
			
			
			// This Code was maybe For Security  // Not useful for me anyway
//			if ($res) {
//				if (strpos($sql, 'SELECT') === false) {   // This is important
//					return true;
//				}
//			} else {
//				if (strpos($sql, 'SELECT') === false) {
//					return false;
//				} else {
//					return null;
//				}
//			}
//
			
			$results = array();
			
			while ($row = mysqli_fetch_array($res)) {
				$result = new DALQueryResult();
				
				foreach ($row as $k => $v) {
					$result->$k = $v;
				}
				$results[] = $result;
			}
			return $results;
		}
		
		private function dbconnect()
		{
			
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB)
			or die("<br/>Could not connect to MySQL server");
			
			return $conn;
			
		}
		
	}