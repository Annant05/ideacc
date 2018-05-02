<?php
	include("../../conf/connectdb.php");
	$create_table = "CREATE TABLE IF NOT EXISTS `coursepdf` (`id` int(11) NOT NULL AUTO_INCREMENT,`cname` varchar(100) NOT NULL,`size` varchar(100) NOT NULL,`type` varchar(10) NOT NULL, `class` varchar(10) NOT NULL,PRIMARY KEY(id)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";
	$result = mysqli_query($connection, $create_table);
	#include('upload.php');
 
	if (isset($_POST['sub_cat'])) {
		$subid = $_POST['sub_cat'];
		echo $subid;
	}
?>
<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<h1>Study Stuff For Software Engineering</h1>
<table>

    <tr>
        <th>File Name</th>
        <th>Size</th>
        <th>Type</th>
        <th>Action</th>
        <!--        <th></th>-->
    </tr>
	<?php
		$result = mysqli_query($connection, "SELECT * FROM coursepdf WHERE subid=$subid ORDER by ID DESC ");
		while ($row = $result->fetch_array()) {
			?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo number_format($row['size'] / (1024 * 1024), 2); ?>MB</td>
                <td><?php echo $row['type']; ?></td>
                <td><a href="download.php?pdf=<?php echo $row['name']; ?>">Download</a></td>
            </tr>
		<?php } ?>
</table>