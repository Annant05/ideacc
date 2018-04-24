<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 20/4/18
	 * Time: 12:12 AM
	 */
	//$con = mysqli_connect("localhost", "my_user", "my_password", "my_db");
	// Check connection
	
	require '../connectdb.php';
	
	$sql = "SELECT age,lastname, firstname FROM person";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "id: " . $row["age"] . " - Name: " . $row["lastname"] . " " . $row["firstname"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	$connection->close();
	
	
	
	/*
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
	    echo 'allfine';
	    echo $br;
    }
	
	echo $database;
	echo $br;
	echo $sql = "SELECT count(*) FROM person ORDER BY lastname";
	echo $br;
	echo $result = mysqli_query($connect, $sql);
	if ($result) {
		// Fetch one and one row
		echo "working";
        echo mysqli_fetch_row($result);
		while ($row = mysqli_fetch_row($result)) {
			printf("%s (%s)\n", $row[0], $row[1]);
		}
		// Free result set
		mysqli_free_result($result);
	} else {
		echo "not working";
	}
	
	*/
	//mysqli_close($connect);
	//mysqli_close($connect);
	//mysqli_close($connect);

 
?>
<html>
<body>hello</body>
</html>
