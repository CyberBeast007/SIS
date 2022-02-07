<?php
session_start();
include 'database.php';

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
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


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
								<h3>Home</h3>
							</div>
							<div class="module-body">
							
							<h3><p><i class="icon-calendar icon-4x"></i> <a href="Attendance.php">Manage Attendance</a>  </p></h3>
							<h3><p><i class="icon-pencil icon-4x"></i> <a href="AddStudents.php">Manage Student</a>  </p></h3>
							
							<h3><p><i class="icon-user icon-4x"></i> <a href="TotalStudents.php">Students Database</a>  </p></h3>
							
							<h3><p><i class="icon-file icon-4x"></i> <a href="AddResults.php">Manage Results</a>  </p></h3>
							
							</div>
									</div>
									
									</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	
	</body>
	</html>