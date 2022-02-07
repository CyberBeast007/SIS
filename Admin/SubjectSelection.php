<?php
session_start();
include 'database.php';

$rollno = $_GET['Rollno'];
$email = $_GET['Email'];
$ayear = $_GET['Year'];


if(isset($_POST['submit']))
{
	$Semester=$_POST['Semester'];
	$StudentName=$_POST['StudentName'];	
	$StudentRollNo=$_POST['StudentRollNo'];	
	$StudentEmail=$_POST['StudentEmail'];
	
	$subject1=$_POST['subject1'];
	$subject2=$_POST['subject2'];
	$subject3=$_POST['subject3'];
	$subject4=$_POST['subject4'];
	$subject5=$_POST['subject5'];
	$subject6=$_POST['subject6'];
	$subject7=$_POST['subject7'];
	$subject8=$_POST['subject8'];
	$subject9=$_POST['subject9'];
	$subject10=$_POST['subject10'];
	$subject11=$_POST['subject11'];
	$subject12=$_POST['subject12'];
	$subject13=$_POST['subject13'];
	$StudentAcademicYear=$_POST['StudentAcademicYear'];
	


$sql=mysqli_query($conn,"INSERT INTO selected_subjects (StudentName,StudentEmail,StudentRollNo,SelectedSubject1,SelectedSubject2,SelectedSubject3,SelectedSubject4,SelectedSubject5,SelectedSubject6,SelectedSubject7,SelectedSubject8,SelectedSubject9,SelectedSubject10,SelectedSubject11,SelectedSubject12,SelectedSubject13,SelectedSubject14,SelectedSubject15,StudentAcademicYear,StudentSemester) VALUES('$StudentName','$StudentEmail','$StudentRollNo','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$subject11','$subject12','$subject13','','','$StudentAcademicYear','$Semester')");

echo "<script>alert('Student Added');</script>";

header('location:dashboard.php');

}



?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php include('header.php');?>
<div class="wrapper">
		<div class="container">
			<div class="row">
				
			<div class="span9">
					<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Insert Student Subjects</h3>
							</div>
							<div class="module-body">
		<form class="form-horizontal row-fluid" name="insertstudent" method="post" enctype="multipart/form-data">
	<?php	$query = "SELECT StudentName,StudentNameLast from studentsinfo_tbl WHERE StudentRollNo='$rollno'"; 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);	


$sname = $row['StudentName'];
$snamelast = $row['StudentNameLast'];
?>


							
							<div class="control-group">
<label class="control-label" for="basicinput">Semester</label>
<div class="controls">
<select name="Semester" id="Semester" onChange="getSubcat(this.value);">
<option disabled selected value> -- Select -- </option>
  <option value="1">1</option>
  <option value="2">2</option>
   <option value="3">3</option>
  
  
</select>
</div>
</div>

	<div class="control-group">
<label class="control-label" for="basicinput">Student Name</label>
<div class="controls">
<input type="text" name="StudentName" id="StudentName"  value="<?php echo $sname ?> <?php echo $snamelast ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Roll No</label>
<div class="controls">
<input type="text" name="StudentRollNo" id="StudentRollNo"  value="<?php echo $rollno ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Email</label>
<div class="controls">
<input type="text" name="StudentEmail" id="StudentEmail"  value="<?php echo $email ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Academic Year</label>
<div class="controls">
<input type="text" name="StudentAcademicYear" id="StudentAcademicYear"  value="<?php echo $ayear ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>
	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 2</label>
<div class="controls">
<select   name="subject22"  id="subject22" onChange="getSubcat2(this.value);" required>	
</div>
</div>
	
<div class="control-group">
<label class="control-label" for="basicinput">Subject 2</label>
<div class="controls">
<select   name="subject2"  id="subject2" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 4</label>
<div class="controls">
<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 3</label>
<div class="controls">
<select   name="subject3"  id="subject3" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 6</label>
<div class="controls">
<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 4</label>
<div class="controls">
<select   name="subject4"  id="subject4" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 8</label>
<div class="controls">
<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>	
</div>
</div>
	
<div class="control-group">
<label class="control-label" for="basicinput">Subject 5</label>
<div class="controls">
<select   name="subject5"  id="subject5" onChange="getSubcat2(this.value);" required>	
</div>
</div>
	
<div class="control-group">
<label class="control-label" for="basicinput">Subject 10</label>
<div class="controls">
<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 6</label>
<div class="controls">
<select   name="subject6"  id="subject6" onChange="getSubcat2(this.value);" required>	
</div>
</div>
	
<div class="control-group">
<label class="control-label" for="basicinput">Subject 12</label>
<div class="controls">
<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 7</label>
<div class="controls">
<select   name="subject7"  id="subject7" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 8</label>
<div class="controls">
<select   name="subject8"  id="subject8" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 9</label>
<div class="controls">
<select   name="subject9"  id="subject9" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 10</label>
<div class="controls">
<select   name="subject10"  id="subject10" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 11</label>
<div class="controls">
<select   name="subject11"  id="subject11" onChange="getSubcat2(this.value);" >	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 12</label>
<div class="controls">
<select   name="subject12"  id="subject12" onChange="getSubcat2(this.value);" >	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div>	

<div class="control-group">
<label class="control-label" for="basicinput">Subject 13</label>
<div class="controls">
<select   name="subject13"  id="subject13" onChange="getSubcat2(this.value);" >	
</div>
</div>	
<div class="control-group">
<label class="control-label" for="basicinput">Subject 1</label>
<div class="controls">
<select   name="subject1"  id="subject1" onChange="getSubcat2(this.value);" required>	
</div>
</div> <br></br>
								<div class="controls">
												<button type="submit" name="submit" class="btn">Add</button>
											</div>
										</div>

	
							
							
							
							
							
							</form>
							</div>
									</div>
									
									</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

   <script>
function getSubcat(val) {
	$.ajax({
	type: "GET",
	url: "get_subject.php",
	data:'semester='+val,
	success: function(data){
		$("#subject1").html(data);
		$("#subject2").html(data);
		$("#subject3").html(data);
		$("#subject4").html(data);
		$("#subject5").html(data);
		$("#subject6").html(data);
		$("#subject7").html(data);
		$("#subject8").html(data);
		$("#subject9").html(data);
		$("#subject10").html(data);
		$("#subject11").html(data);
		$("#subject12").html(data);
		$("#subject13").html(data);
	}
	});
}


</script>

<script>
function getSubcat2(val) {
	var rollnoo = document.getElementById("StudentRollNo").value; 
	var sem = document.getElementById("Semester").value; 
	

	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            //alert(xmlhttp.responseText);
			//document.getElementById("name").value = xmlhttp.responseText;
			
			
		
		
        }
    };
    xmlhttp.open("GET", "get_subject2.php?subject=" +val+"&rollno=" +rollnoo+"&sem=" +sem, true);
    xmlhttp.send();
	
	
}

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>