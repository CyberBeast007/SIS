<?php
session_start();
include 'database.php';

	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 
    $sql="SELECT * FROM admin_tbl where AdminEmail='$email' and AdminPassword='$pass'";
	
	$result    = $conn->query($sql);
$user_data = $result->fetch_assoc();
$count_row = $result->num_rows;

//if the username is not in db then insert to the table
if ($count_row == 1){

echo "Ok";

$_SESSION['email']=$_POST['email'];

header('location:dashboard.php');

}
else{
	
	echo "False";
}
  

   

?>