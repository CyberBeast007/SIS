<?php 
session_start();
include('database.php');

 $roll= $_GET['roll'];
  $remark= $_GET['remark'];
  $name= $_GET['name'];
  $subject= $_GET['subject'];
   $date= $_GET['date'];

?>

<?php

$query=mysqli_query($conn,"select StudentEmail,StudentProfileToken,StudentAcademicYear from studentsinfo_tbl WHERE StudentRollNo='$roll'");


while($row=mysqli_fetch_assoc($query))
{ 
?>
<?php
$email = $row["StudentEmail"];
$token = $row["StudentProfileToken"];
$ayear = $row["StudentAcademicYear"];


 
 ?>



<?php
 $update = "insert into student_attendance_1(StudentName,StudentEmail,StudentRollNo,Date,Status,Remark,StudentSubject,StudentProfileToken,StudentAcademicYear) values ('$name','$email','$roll','$date','Absent','$remark','$subject','$token','$ayear')";

    if (mysqli_query($conn, $update))
    {
       // echo "Record updated successfully";
		
		
		
    } 
    else 
    {
        echo "Error updating record: " . mysqli_error($connect);
		
    } 
?>


<?php  } ?>


    
   


