<?php
session_start();
include 'database.php';

	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 
    $sql="SELECT * FROM studentsinfo_tbl where StudentEmail='$email' and StudentPassword='$pass'";
	
	$result    = $conn->query($sql);
$user_data = $result->fetch_assoc();
$count_row = $result->num_rows;

//if the username is not in db then insert to the table
if ($count_row == 1){

echo "Ok";

$_SESSION['email']=$_POST['email'];
$_SESSION['rollno']=$user_data['StudentRollNo'];
$_SESSION['profiletoken']=$user_data['StudentProfileToken'];
header('location:Profile.php');

}
else{
	
	echo "False";
}
  

   

?>