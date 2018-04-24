<?php
 
$connect=mysqli_connect('localhost','root','root','reg_user');
 
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect';
}
?>