<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'database.php';



 $roll= $_GET['rollno'];
 $sem = $_GET['sem'];
 
 $subject = $_GET['subject'];
 
 
  
  
  

 
 
 echo $roll;
 echo $sem;
 
 
 $ro = "$roll";

 
 
  ?>
	 
	<?php


	$query=mysqli_query($conn,"UPDATE subjects1 SET `$subject` = '$ro' WHERE id='$ro'");

 
 ?>








