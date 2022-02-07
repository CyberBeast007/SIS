<?php
session_start();
include 'database.php';


 $semester= $_GET['semester'];
 
 
 if($semester==1){
	 	
 

?>


<?php
$query=mysqli_query($conn,"select * from subjectsemester1");  ?>


<option value="">--Select--</option>

<?php while($row=mysqli_fetch_assoc($query))
	

{
	
	
$val = $row["Subject"];


	
	?>
						
					<option><?php echo htmlentities($row["Subject"]);?></option>
											
											
								
											
											
<?php } ?>
										
	 <?php }
	 
	 else{
		 
		 echo "OK";
		 
	 }
	 
	 
	 
	 ?>									

					
										
										
										
										