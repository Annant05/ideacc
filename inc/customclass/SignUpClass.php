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
		private $table_name = "users_table";

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
		
		public function signUptoDB($name, $username, $email, $password, $checkPass)
		{
			$this->name = $name;
			$this->username = $username;
			$this->email = $email;
			$this->password = md5($password);
			
			if ($this->isValidPass($this->password, $checkPass)) {
				$this->sendToDB();
				return true;
			} else {
				return false;
			}
		}
		
		private function isValidPass($pass, $checkPass)
		{
			if (!strcmp($pass, (md5($checkPass)))) {
				return true;
			} else {
				return false;
			}
		}
		
		private function sendToDB()
		{
			
			
			$sql_query = "Insert into $this->table_name
						  values('$this->username','$this->email','$this->name','$this->password');";
			$res = $this->conn->query($sql_query);
			//echo "Insert Complete";
			$this->conn->close();
			
		}
		
		//Check For username and email Exists;
		
		
		
	}