<?php
session_start();
include 'database.php';


 $semester= $_GET['sem'];
 
 if($semester==1){

?>


<?php
$query=mysqli_query($conn,"select StudentName,StudentRollNo from selected_subjects Where StudentSemester=1");


while($row=mysqli_fetch_assoc($query))
{
	
	

	
	?>

							
								

										
	<option value="<?php echo htmlentities($row["StudentRollNo"]);?>"><?php echo htmlentities($row["StudentName"]);?> || <?php echo htmlentities($row["StudentRollNo"]);?></option>
											
											
								
											
											
<?php  } ?>


<?php }
else{  ?>
										
<?php
$query=mysqli_query($conn,"select StudentName,StudentRollNo from selected_subjects Where StudentSemester=2");


while($row=mysqli_fetch_assoc($query))
{
	
	


	
	?>

							
								

										
										<option value="<?php echo htmlentities($row["StudentRollNo"]);?>"><?php echo htmlentities($row["StudentName"]);?> || <?php echo htmlentities($row["StudentRollNo"]);?></option>
										<?php  } ?>
										
<?php }  ?>
					
										
										
										
										