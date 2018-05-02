<?php
include("connect.php");
#include('upload.php');
?>
<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<table>
 <tr>
   <th>File Name</th>
   <th>Size</th>
   <th>Type</th>
    <th> Student id</th>
   <th>Action</th>
  </tr>
 <?php
 $result=mysqli_query($conn,"SELECT*FROM assignment ORDER by ID DESC");
 while($row=$result->fetch_array()){
  ?>
 
  <tr>
  <td><?php echo $row['name'];?></td>
  <td><?php echo number_format($row['size']/(1024*1024),2);?>MB</td>
  <td><?php echo $row['type'];?></td>
      <td><?php echo $row['studid'];?></td>
  <td><a href="download.php?pdf=<?php echo $row['name'];?>">Download</a></td>
  </tr>
  <?php }?>
  </table>