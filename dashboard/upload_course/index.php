<?php
	include("../../conf/connectdb.php");
	require_once('../../conf/config.php');
	
	//$create_table = "CREATE TABLE IF NOT EXISTS `coursepdf` (`id` int(11) NOT NULL AUTO_INCREMENT,`cname` varchar(100) NOT NULL,`size` varchar(100) NOT NULL,`type` varchar(10) NOT NULL, `class` varchar(10) NOT NULL,PRIMARY KEY(id)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";
	$result = mysqli_query($connection, $create_table);
	#include('upload.php');
 
	if (isset($_POST['sub_cat'])) {
		$subid = $_POST['sub_cat'];
		echo $subid;
	}
?>
<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<h1>Study Stuff For Advanced Computer Architecture</h1>
<table>

    <tr>
        <th>File Name</th>
        <th>Type</th>
        <th>Action</th>
        <!--        <th></th>-->
    </tr>
	<?php
        $dal = new DAL();
        //$dal->
        
         $result = $dal->get_filename_filetype();
        
     //   echo $result[0]->fname;
       // echo $result[0]->fname;
		//$result = mysqli_query($connection, "SELECT * FROM coursepdf WHERE subid='CS-6001' ORDER by ID DESC ");
		foreach ($result as $row) {
			?>

            <tr>
                <td><?php echo $row->fname; ?></td>
<!--                <td>--><!--?php //echo number_format($row['size'] / (1024 * 1024), 2); ?><!--MB</td>-->
                <td><?php echo $row->ftype; ?></td>
                <td><a href="download.php?pdf=<!--?php echo $row->fname; ?-->">Download</a></td>
            </tr>
		<?php } ?>
</table>