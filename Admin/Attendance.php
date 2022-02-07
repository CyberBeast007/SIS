<?php
session_start();
include 'database.php';


$query=mysqli_query($conn,"select Subject from subjectsemester1");

?>
<html>
<head>
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
<script>
function addDate(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date').value == ''){
document.getElementById('date').value = day + '-' + month + '-' + year;
}
}
</script>
</head>
<?php include('header.php');?>
<div class="wrapper">
		<div class="container">
			<div class="row">
				
			<div class="span9">
					<div class="content">
					<div class="module">
							<div class="module-head">
								<h3>Attendance Semester 1</h3>
							</div>
							<div class="module-body">
<body onload="addDate();">

<b><label class="control-label" for="basicinput">Subject  </label></b>
  <select name="subject" id="subject" onChange="getSubcat(this.value);"  required>
  <option disabled selected value> -- Subject -- </option>
 <?php while($row=mysqli_fetch_array($query)) { ?>
	 
<option><?php echo htmlentities($row['Subject']);?> </option> 

	 
 <?php } ?>
  
</select> 

<select   name="students"  id="students" onChange="getSubcat2(this.value);" required>


</select>

<br></br>

<label class="control-label" >Name</label>
   <input type="text" name="name" id="name" disabled>
   <br></br>
   <label>Date</label>
   <input type="text" name="date" id="date" value= "" disabled>
   <br></br>
   <label>Remark</label>
   <input type="text" name="remark" id="remark" value= "-">
   <br></br>
   
   
 <button type="submit" onclick="get_present()">Present</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" onclick="get_present2()">Absent</button>
	
	
	
			</div>
									</div>
									
									</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->















<script language="javascript" type="text/javascript">
function get_present() {	
var rollno = document.getElementById("students").value; 
var name = document.getElementById("name").value;
var date = document.getElementById("date").value; 
var subject = document.getElementById("subject").value;
var remark = document.getElementById("remark").value; 

var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert("Success");
			//document.getElementById("demo").innerHTML = xmlhttp.responseText;
			//alert(Success);
			
		
		
        }
    };
    xmlhttp.open("GET", "Present.php?roll=" +rollno +"&remark=" +remark +"&name=" +name +"&subject=" +subject +"&date=" +date, true);
    xmlhttp.send();




}
</script>

<script language="javascript" type="text/javascript">
function get_present2() {	
var rollno = document.getElementById("students").value; 
var name = document.getElementById("name").value;
var date = document.getElementById("date").value; 
var subject = document.getElementById("subject").value;
var remark = document.getElementById("remark").value; 

var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert("Success");
			//document.getElementById("demo").innerHTML = xmlhttp.responseText;
			//alert(Success);
			
		
		
        }
    };
    xmlhttp.open("GET", "Absent.php?roll=" +rollno +"&remark=" +remark +"&name=" +name +"&subject=" +subject +"&date=" +date, true);
    xmlhttp.send();




}
</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "GET",
	url: "get_student.php",
	data:'subject='+val,
	success: function(data){
		$("#students").html(data);
	}
	});
}


</script>

<script>
function getSubcat2(val) {

	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            //alert(xmlhttp.responseText);
			document.getElementById("name").value = xmlhttp.responseText;
			
			
		
		
        }
    };
    xmlhttp.open("GET", "get_student2.php?roll="+val, true);
    xmlhttp.send();
	
	
}

</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>

