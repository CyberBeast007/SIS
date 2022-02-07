<?php
session_start();
include 'database.php';


 $subject= $_GET['subject'];
 
 

?>


<?php
$query=mysqli_query($conn,"select * from subjects1");

$cnt=1;
while($row=mysqli_fetch_assoc($query))
{
	
	
$val = $row["$subject"];

	
	?>

							
								

										
										<option><?php echo htmlentities($row["$subject"]);?></option>
											
											
								
											
											
<?php  } ?>
										
										
<?php 


?>	

					
										
										
										
										