<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 26/4/18
	 * Time: 11:27 PM
	 */
	
	class LoginClass
	{
		private $username;
		private $DBuname;
		private $Dbpass;
		private $password;
		private $connection;
		private $table_name = "users_table";
		
		public function __construct($connect)
		{
			$this->connection = $connect;
		}
		
		public function checkLogin($username, $password)
		{
			$this->username = $username;
			$this->password = md5($password);
			$this->getFromDb();
		}
		
		public function getFromDb()
		{
			echo $get_name = "SELECT name from $this->table_name WHERE username = 'admin'";
			echo "<br>";
			echo $res_name = $this->connection->query($get_name);
			
			if ($res_name->num_rows == 1) {
				// output data of each row
				while ($row = $res_name->fetch_assoc()) {
					echo $_SESSION['name'] = $row["name"];
				}
			} else {
				echo "0 results";
			}
		}
		
		
	}