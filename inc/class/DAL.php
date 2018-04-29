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
			// TODO: Implement __set() method.
			$this->_results[$name] = $value;
		}
		
		public function __get($name)
		{
			// TODO: Implement __get() method.
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
		
		public function check_for_the_user_in_DB($username, $password)
		{
			/** @noinspection SqlNoDataSourceInspection */
			/** @noinspection SqlResolve */
			$sql_user_pass = "SELECT username as username , password as pass,name as name  FROM users_table WHERE username='$username' and password='$password'";
			///$sql = "SELECT name as name,username as uname FROM users_table"; // Remember Upper Case SELECT and FROM.
			return $this->query($sql_user_pass);
			
			
		}
		
		private function query($sql)
		{
			
			$conn = $this->dbconnect();
			$res = mysqli_query($conn, $sql);
			
			if ($res) {
				if (strpos($sql, 'SELECT') === false) {   // This is important
					return true;
				}
			} else {
				if (strpos($sql, 'SELECT') === false) {
					return false;
				} else {
					return null;
				}
			}
			
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