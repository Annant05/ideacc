<?php
// Creating connection test is our database name
$conn = new mysqli('localhost', 'root', 'ROOT','test');
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$create_table="CREATE TABLE IF NOT EXISTS `pdf` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(100) NOT NULL,`size` varchar(100) NOT NULL,`type` varchar(10) NOT NULL, `class` varchar(10) NOT NULL,PRIMARY KEY(id)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";
$result=mysqli_query($conn,$create_table);
?>