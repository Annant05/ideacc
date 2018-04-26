<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 26/4/18
	 * Time: 11:27 PM
	 */
	
	class signUpClass
	{
		private $username;
		private $name;
		private $email;
		private $password;
		private $connection;
		private $table_name = "users_table";
		
		public function __construct($connect)
		{
			$this->connection = $connect;
		}
		
		public function signUptoDB($name, $username, $email, $password, $checkPass)
		{
			$this->name = $name;
			$this->username = $username;
			$this->email = $email;
			$this->password = md5($password);
			
			if ($this->isValidPass($this->password, $checkPass)) {
				//$this->sendToDB();
				//echo "in true block Check DB";
				$this->sendToDB();
			} else {
				//echo "In false Block Re-enter";
			}
			
		}
		
		public function isValidPass($pass, $checkPass)
		{
			if (!strcmp($pass, (md5($checkPass)))) {
				//	echo "PassWord Matches";
				return true;
			} else {
				//echo "passwords Don't match";
				return false;
			}
		}
		
		public function sendToDB()
		{
			$sql_query = "Insert into $this->table_name
						  values('$this->username','$this->email','$this->name','$this->password');";
			$res = $this->connection->query($sql_query);
			//echo "Insert Complete";
			$this->connection->close();
		}
		
	}