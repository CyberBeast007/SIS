<?php 
session_start();
include 'database.php';


$subject=$_GET['subject'];
$profileid=$_GET['ProfileID'];
$verify = $_SESSION['profiletoken'];


if ($profileid==$verify)	
{


?>

<html lang="en">
<head>
<meta charset="utf-8">
<title>A</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- panel-body  -->
	    <div class="panel-body">
		
		<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Date</th>
											<th>Status</th>
											<th>Remarks</th>										
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($conn,"select Date,Status,Remark from student_attendance_1 where StudentRollNo='".$_SESSION['rollno']."' AND StudentSubject='$subject' AND StudentProfileToken='$profileid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>				
<p><?php echo htmlentities($row['Date']);?></p>					

										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['Date']);?></td>
											<td><?php echo htmlentities($row['Status']);?></td>
											<td> <?php echo htmlentities($row['Remark']);?></td>
											
											
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
					
		</div>
		<!-- panel-body  -->



<?php }


else {
	echo "<script>alert('Unauthorized User');</script>";
	
}





?>
























<script src="js/datatables/jquery.dataTables.js"></script>
<!--	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script> -->

</body>
</html>



























