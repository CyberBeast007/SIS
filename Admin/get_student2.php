<?php
session_start();
include 'database.php';


 $roll= $_GET['roll'];
 
 

?>


<?php
$query=mysqli_query($conn,"select * from studentsinfo_tbl WHERE StudentRollNo='$roll'");


while($row=mysqli_fetch_assoc($query))
{
	?>
<?php echo htmlentities($row["StudentName"]);?> <?php echo htmlentities($row["StudentNameLast"]);?>
	
<?php  } ?>
