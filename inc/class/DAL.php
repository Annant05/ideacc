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
		
		//TODO: Always RemeMber to Have SELECT AND FROM IN UPPER CASE
		// Below Are my Methods
//		public function check_for_the_user_in_DB($username, $password)
//		{
//			/** @noinspection SqlNoDataSourceInspection */
//			/** @noinspection SqlResolve */
//			$sql_user_pass = "SELECT username as username , password as pass,name as name,email as email  FROM users_table WHERE username='$username' and password='$password'";
//			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
//			return $this->query($sql_user_pass);
//		}
		
		public function login_check_student_in_DB($username, $password)
		{
			$table_name = "students";
			
			/** @noinspection SqlNoDataSourceInspection */
			/** @noinspection SqlResolve */
			$sql_user_pass = "SELECT username as username , password as pass,name as name,email as email  FROM $table_name WHERE username='$username' and password='$password'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_pass);
		}
		
		public function login_check_instructor_in_DB($username, $password)
		{
			$table_name = "instructor";
			/** @noinspection SqlNoDataSourceInspection */
			/** @noinspection SqlResolve */
			$sql_user_pass = "SELECT username as username , password as pass,name as name,email as email  FROM $table_name WHERE username='$username' and password='$password'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_pass);
		}
		
		public function signup_check_student_email_in_DB($username, $email)
		{
			$table_name = "students";
			$sql_user_email = "SELECT username as username ,email as email  FROM $table_name WHERE username='$username' OR email='$email'";
			return $this->query($sql_user_email);
			
		}
		
		public function signup_check_instructor_email_in_DB($username, $email)
		{
			$table_name = "instructor";
			$sql_user_email = "SELECT username as username ,email as email  FROM $table_name WHERE username='$username' OR email='$email'";
			return $this->query($sql_user_email);
			
		}
		
		public function check_username_email_in_DB($username, $email, $usertype)
		{
			$table_name = null;
			//	$sql_query = null;
			
			if ($usertype === "student") {
				$table_name = "students";
			} else if ($usertype === "instructor") {
				$table_name = "instructor";
			} else {
				echo "unknown UserType";
			}
			
			$sql_user_email = "SELECT username as username ,email as email  FROM $table_name WHERE username='$username' OR email='$email'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_email);
		}
		
		
		public function get_question_from_DB($limit_val)
		{
			$table_name = "quiz_ques";
			/** @noinspection SqlResolve */
			$sql_get_question = "SELECT question as ques, opt_A as opt_1,opt_B as opt_2,opt_C as opt_3,opt_D as opt_4,corr_opt as cor_opt  FROM $table_name order by RAND()  limit $limit_val";
			return $this->query($sql_get_question);
		}
		
		
		public function get_subject_categories_from_DB()
		{
			$table_name = "sub_category";
			/** @noinspection SqlResolve */
			$sql_cat = "SELECT sub_name as subject from $table_name order by sub_name asc ";
			return $this->query($sql_cat);
		}
		
		
		public function get_course_file_filetype()
		{
			$table_name = "coursepdf";
			
			$sql = "SELECT filename as fname , ftype as ftype FROM $table_name ";//WHERE subid='CS-6001' ORDER by ID DESC ";
			return $this->query($sql);
		}
		
		
		public function get_assignment_file_filetype()
		{
			$table_name = "assignment";
			
			$sql = "select assign_name as aname , filename  as fname, ftype as ftype from $table_name";
			
			//$sql = "SELECT filename as fname , ftype as ftype FROM $table_name ";//WHERE subid='CS-6001' ORDER by ID DESC ";
			return $this->query($sql);
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