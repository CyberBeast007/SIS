<?php

session_start();
include 'database.php';

$roll=$_GET['roll'];

if(isset($_POST['submit']))
{
	$id=$roll;
	$subject1=$_POST['Subject1'];
	$subject2=$_POST['Subject2'];
	$subject3=$_POST['Subject3'];
	$subject4=$_POST['Subject4'];
	$subject5=$_POST['Subject5'];
	$subject6=$_POST['Subject6'];
	$subject7=$_POST['Subject7'];
	$subject8=$_POST['Subject8'];
	$subject9=$_POST['Subject9'];
	$subject10=$_POST['Subject10'];
	$subject99=$_POST['Subject99'];
	$verify="Programming in .Net";
	
	 if($subject99==$verify){ 
		
 $sql=mysqli_query($conn,"INSERT INTO results1 (id,Software Engineering,Digital Communications and Networking,Web Technologies,Finance and Accounting,Information Systems and Technologies,Web Technologies Lab,Digital Communications and Networking Lab,Information Systems and Technologies Lab,Programming in .Net,Programming in .Net LAB,Programming in JAVA,Programming in JAVA LAB) VALUES('$id','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10')");
		
	 } 

 	else{
		$sql=mysqli_query($conn,"INSERT INTO results1 (id,Software Engineering,Digital Communications and Networking,Web Technologies,Finance and Accounting,Information Systems and Technologies,Web Technologies Lab,Digital Communications and Networking Lab,Information Systems and Technologies Lab,Programming in JAVA,Programming in JAVA LAB) VALUES('$id','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10')");
		
		
		
	} 

}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Marks</title>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
</head>
<body>

<div style="margin-left:50px;">


 <form name="updatemarks" id="updatemarks" method="post"> 
 
 <?php $query=mysqli_query($conn,"select SelectedSubject1,SelectedSubject2,SelectedSubject3,SelectedSubject4,SelectedSubject5,SelectedSubject6,SelectedSubject7,SelectedSubject8,SelectedSubject9,SelectedSubject10 from selected_subjects Where StudentRollNo=$roll AND StudentSemester=1");


while($row=mysqli_fetch_assoc($query))
{
	
	
	?>
 
<label><?php echo htmlentities($row['SelectedSubject1']);?></label>
<input type="text" name="Subject1" id="Subject1"  value=""  required> <br></br>
<label><?php echo htmlentities($row['SelectedSubject2']);?></label>
<input type="text" name="Subject2" id="Subject2"  value="" required><br></br>
<label><?php echo htmlentities($row['SelectedSubject3']);?></label>
<input type="text" name="Subject3" id="Subject3"  value=""  required><br></br>
<label><?php echo htmlentities($row['SelectedSubject4']);?></label>
<input type="text" name="Subject4" id="Subject4"  value=""  required><br></br>
<label><?php echo htmlentities($row['SelectedSubject5']);?></label>
<input type="text" name="Subject5" id="Subject5"  value="" required><br></br>
<label><?php echo htmlentities($row['SelectedSubject6']);?></label>
<input type="text" name="Subject6" id="Subject6"  value=""  required><br></br>
<label><?php echo htmlentities($row['SelectedSubject7']);?></label>
<input type="text" name="Subject7" id="Subject7"  value=""  required><br></br>
<label><?php echo htmlentities($row['SelectedSubject8']);?></label>
<input type="text" name="Subject8" id="Subject8"  value=""  required><br></br>
<label><?php echo htmlentities($row['SelectedSubject9']);?></label>
<input type="text" name="Subject9" id="Subject9"  value="" required><br></br>

<input type="hidden" name="Subject99" id="Subject99"  value="<?php echo htmlentities($row['SelectedSubject9']);?>"  required><br></br>

<label><?php echo htmlentities($row['SelectedSubject10']);?></label>
<input type="text" name="Subject10" id="Subject10"  value=""  required><br></br>
<br></br>
<button type="submit" name="submit" class="btn">Add</button>


<?php } ?>

 </form>
</div>

</body>
</html>


     