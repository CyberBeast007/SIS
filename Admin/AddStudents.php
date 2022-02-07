<?php
session_start();
include 'database.php';

if(isset($_POST['submit']))
{
	$StudentName=$_POST['StudentName'];
	$StudentNameLast=$_POST['StudentNameLast'];
	$StudentEmail=$_POST['StudentEmail'];
	$StudentPassword=$_POST['StudentPassword'];
	$StudentPhone=$_POST['StudentPhone'];
	$StudentDOB=$_POST['StudentDOB'];
	$StudentGender=$_POST['StudentGender'];
	$StudentCourse=$_POST['StudentCourse'];
	$StudentFatherName=$_POST['StudentFatherName'];
	$StudentMotherName=$_POST["StudentMotherName"];
	$StudentMaritalStatus=$_POST["StudentMaritalStatus"];
	$StudentBloodGroup=$_POST["StudentBloodGroup"];
	$StudentAddress=$_POST["StudentAddress"];
	$StudentCountry=$_POST["StudentCountry"];
	$StudentState=$_POST["StudentState"];
	$StudentCity=$_POST["StudentCity"];
	$StudentDistrict=$_POST["StudentDistrict"];
	$StudentPincode=$_POST["StudentPincode"];
	$StudentRollNo=$_POST["StudentRollNo"];
	$StudentAcademicYear=$_POST["StudentAcademicYear"];
	$StudentCurrentSemester=$_POST["StudentCurrentSemester"];
	$tkngen = md5($StudentName);
	$StudentProfileToken= $tkngen;
	
	$StudentImage=$_FILES["StudentImage"]["name"];
//for getting product id
/* $query=mysqli_query($con,"select max(id) as pid from products");
	$result=mysqli_fetch_array($query);
	 $productid=$result['pid']+1; */
	$dir="StudentImages/$StudentRollNo";
if(!is_dir($dir)){
		mkdir("StudentImages/".$StudentRollNo);
	}
	move_uploaded_file($_FILES["StudentImage"]["tmp_name"],"StudentImages/$StudentRollNo/".$_FILES["StudentImage"]["name"]);
	
	
$sql=mysqli_query($conn,"INSERT INTO studentsinfo_tbl (StudentName,StudentNameLast,StudentEmail,StudentPassword,StudentPhone,StudentClass,StudentDOB,StudentGender,StudentCourse,StudentFatherName,StudentMotherName,StudentMaritalStatus,StudentBloodGroup,StudentAddress,StudentCountry,StudentState,StudentCity,StudentDistrict,StudentPincode,StudentSubjectIdSemester1,StudentSubjectIdSemester2,StudentSubjectIdSemester3,StudentSubjectIdSemester4,StudentRollNo,StudentAcademicYear,StudentCurrentSemester,StudentProfileToken,StudentImage) VALUES('$StudentName','$StudentNameLast','$StudentEmail','$StudentPassword','$StudentPhone','A','$StudentDOB','$StudentGender','$StudentCourse','$StudentFatherName','$StudentMotherName','$StudentMaritalStatus','$StudentBloodGroup','$StudentAddress','$StudentCountry','$StudentState','$StudentCity','$StudentDistrict','$StudentPincode','','','','','$StudentRollNo','$StudentAcademicYear','$StudentCurrentSemester','$StudentProfileToken','$StudentImage')");

echo "<script>alert('Student Added');</script>";

$to = $StudentEmail;
         $subject = "Welcome To SIS Portal";
         
         $message = "<h1>Your Login Credential</h1>";
         $message .= "<h2>Username :- $StudentEmail </h2>";
         $message .= "<h2>Password :- $StudentPassword </h2>";
         $header = "From:admin@sisportalsupport.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);

header("location:SubjectSelection.php?Rollno=".$StudentRollNo."&Email=".$StudentEmail."&Year=".$StudentAcademicYear);

}


?>
<?php

function generateRandomString($length = 12) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*', ceil($length/strlen($x)) )),1,$length);
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
								<h3>Insert Student Details</h3>
							</div>
							<div class="module-body">
					
<form class="form-horizontal row-fluid" name="insertstudent" method="post" enctype="multipart/form-data">
						


<div class="control-group">
<label class="control-label" for="basicinput">Student Name</label>
<div class="controls">
<input type="text"    name="StudentName"  placeholder="Enter Student Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student Last Name</label>
<div class="controls">
<input type="text"    name="StudentNameLast"  placeholder="Student Last Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Email</label>
<div class="controls">
<input type="text"    name="StudentEmail"  placeholder="Student Email" class="span8 tip" required>
</div>
</div>

<div class="control-group">

<div class="controls">

<input type="hidden" name="StudentPassword"  value="<?php echo generateRandomString();?>" class="span8 tip" >

</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student Phone</label>
<div class="controls">
<input type="text" name="StudentPhone"  placeholder="Student Phone" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student DOB</label>
<div class="controls">
<input type="date"    name="StudentDOB"  placeholder="Student DOB" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student Gender</label>
<div class="controls">
<select name="StudentGender" id="StudentGender">
<option disabled selected value> -- Select -- </option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student Course</label>
<div class="controls">
<select name="StudentCourse" id="StudentCourse">
<option disabled selected value> -- Select -- </option>
  <option value="Master Of Science - Information Technology">Master Of Science - Information Technology</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Father Name</label>
<div class="controls">
<input type="text" name="StudentFatherName"  placeholder="Student Father Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Mother Name</label>
<div class="controls">
<input type="text" name="StudentMotherName"  placeholder="Student Mother Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Marital Status</label>
<div class="controls">
<select name="StudentMaritalStatus" id="StudentMaritalStatus">
<option disabled selected value> -- Select -- </option>
  <option value="Married">Married</option>
  <option value="Unmarried">Unmarried</option>
  
</select>

</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Student Blood Group</label>
<div class="controls">
<input type="text" name="StudentBloodGroup"  placeholder="Student Blood Group" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Address</label>
<div class="controls">
<input type="text" name="StudentAddress"  placeholder="Student Address" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Pincode</label>
<div class="controls">
<input type="text" name="StudentPincode" id="StudentPincode"  placeholder="Student Pincode" class="span8 tip" required> <input type="button" class="btn" value="Get Details" onclick="get_details()">
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Country</label>
<div class="controls">
<input type="text" name="StudentCountry" id="StudentCountry"  placeholder="Student Country" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student State</label>
<div class="controls">
<input type="text" name="StudentState" id="StudentState"  placeholder="Student State" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student City</label>
<div class="controls">
<input type="text" name="StudentCity" id="StudentCity"  placeholder="Student City" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student District</label>
<div class="controls">
<input type="text" name="StudentDistrict" id="StudentDistrict"  placeholder="Student District" class="span8 tip" required>
</div>
</div>

 <?php $query2=mysqli_query($conn,"select max(StudentRollNo) as rno from studentsinfo_tbl");
	$result2=mysqli_fetch_array($query2);
	 $studrno=$result2['rno']+1; 
	 ?>
<div class="control-group">

<div class="controls">
<input type="hidden" name="StudentRollNo"  value="<?php echo $studrno ?>" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Student Academic Year</label>
<div class="controls">
<input type="text" name="StudentAcademicYear"  placeholder="Student Academic Year" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Student Current Semester</label>
<div class="controls">
<select name="StudentCurrentSemester" id="StudentCurrentSemester">
<option disabled selected value> -- Select -- </option>
  <option value="1">Semester - 1</option>
	<option value="2">Semester - 2</option>
  <option value="3">Semester - 3</option>
  <option value="4">Semester - 4</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Student Image</label>
<div class="controls">
<input type="file" name="StudentImage" id="StudentImage" value="" class="span8 tip" required>
</div>
</div>








	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Insert</button>
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
function get_details(){
	var pincode=jQuery('#StudentPincode').val();
	if(pincode==''){
		jQuery('#StudentCountry').val('');
		jQuery('#StudentState').val('');
		jQuery('#StudentCity').val('');
		jQuery('#StudentDistrict').val('');
		
	}else{
		jQuery.ajax({
			url:'get.php',
			type:'post',
			data:'pincode='+pincode,
			success:function(data){
				if(data=='no'){
					alert('Wrong Pincode');
					jQuery('#StudentCountry').val('');
					jQuery('#StudentState').val('');
					jQuery('#StudentCity').val('');
					jQuery('#StudentDistrict').val('');
				}else{
					var getData=$.parseJSON(data);
					jQuery('#StudentCountry').val(getData.StudentCountry);
					jQuery('#StudentState').val(getData.StudentState);
					jQuery('#StudentCity').val(getData.StudentCity);
					jQuery('#StudentDistrict').val(getData.StudentDistrict);
					
				}
			}
		});
	}
}
</script>		
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>	
<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>	
									
									</body>
									</html>