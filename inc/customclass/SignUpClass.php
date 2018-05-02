<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 26/4/18
	 * Time: 11:27 PM
	 */
	
	//require_once('../../connectdb.php');
	
	///THis Class is working Fine
	///
	
	
	class SignUpClass
	{
		private $username;
		private $name;
		private $email;
		private $password;
		private $conn;
		//	private $table_name = "users_table";
		private $usertype;
		private $section = null;

//		private function dbconnect()
//		{
//
//			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB)
//			or die("<br/>Could not connect to MySQL server");
//
//			return $conn;
//
//		}
//
		public function __construct($connection)
		{
			$this->conn = $connection;
			
		}
		
		public function signUptoDB($name, $username, $email, $password, $checkPass, $usertype)
		{
			$this->name = $name;
			$this->username = $username;
			$this->email = $email;
			$this->password = md5($password);
			$this->usertype = $usertype;
			
			if ($this->isValidPass($this->password, $checkPass)) {
				$this->sendToDB();
				return true;
			} else {
				return false;
			}
			
		}
		
		public function setStudentSection($section)
		{
			$this->section = $section;
		}
		
		private function isValidPass($pass, $checkPass)
		{
			if (!strcmp($pass, (md5($checkPass)))) {
				return true;
			} else {
				return false;
			}
		}


//		private function sendToDB()
//		{
//			$sql_query = null;
//			if ($this->usertype === "student") {
//				/** @noinspection SqlResolve */
//				$sql_query = "Insert into students
//				values('$this->username','$this->email','$this->name','$this->password','$this->section');";
//			} else if ($this->usertype === "instructor") {
//				/** @noinspection SqlResolve */
//				$sql_query = "Insert into instructor
//						  values('$this->username','$this->email','$this->name','$this->password');";
//			} else {
//				echo "unknown UserType";
//			}
//
//			/*	$sql_query = "Insert into $this->table_name
//							  values('$this->username','$this->email','$this->name','$this->password');";
//			*/    //
//			$res = $this->conn->query($sql_query);
//			echo "Insert Complete";
//			$this->conn->close();
//
//		}
		
		
		public function signUpInstructor($name, $username, $email, $password, $checkPass)
		{
			$sql_query = "Insert into instructor values('$username','$email','$name','$password')";
			
			if ($password === $checkPass) {
				//Check For username and email Exists;
				$res = $this->conn->query($sql_query);
			} else {
				echo "Something went wrong while inserting in INSTRUCTOR";
			}
			$this->conn->close();
		}
		
		
		public function signUpStudent($name, $username, $email, $password, $checkPass, $section)
		{
			$sql_query = "Insert into students values('$username','$email','$name','$password','$section')";
			
			if ($password === $checkPass) {
				//Check For username and email Exists;
				$res = $this->conn->query($sql_query);
			} else {
				echo "Something went Wrong in Sign Up student";
			}
			$this->conn->close();
		}
		
		
	}//end Classs