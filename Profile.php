<?php
session_start();
include 'database.php';

/* echo '<pre>';
var_dump($_SESSION);
echo '</pre>'; */
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets">
<div class="row">
 <?php
$query=mysqli_query($conn,"select * from studentsinfo_tbl where StudentEmail='".$_SESSION['email']."'");
while($row=mysqli_fetch_array($query))
{
?>
  <div class="profile-nav col-md-3">
 
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="Admin/StudentImages/<?php echo $row['StudentRollNo'];?>/<?php echo $row['StudentImage'];?>" alt="">
              </a>
              <h1><?php echo $row['StudentName'];?></h1>
              <p><?php echo $row['StudentEmail'];?></p>
  
          </div>
		  

          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="Profile.php"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="Academic.php"> <i class="fa fa-university"></i> Academic Details</a></li>
              <li><a href="AttendanceReport.php"> <i class="fa fa-edit"></i> AttendanceReport</a></li>
          </ul>
      </div>
  </div>
  
  <div class="profile-info col-md-9">
    
      <div class="panel">
          <div class="bio-graph-heading">
             Student Information System
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Personal Information</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>: <?php echo $row['StudentName'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: <?php echo $row['StudentNameLast'];?></p>
                  </div>
                 <div class="bio-row">
                      <p><span>Gender </span>: <?php echo $row['StudentGender'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday</span>: <?php echo $row['StudentDOB'];?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Email </span>: <?php echo $row['StudentEmail'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span>: <?php echo $row['StudentPhone'];?></p>
                  </div>
                    <div class="bio-row">
                      <p><span>Father Name </span>: <?php echo $row['StudentFatherName'];?></p>
                  </div>
				   <div class="bio-row">
                      <p><span>Mother Name </span>: <?php echo $row['StudentMotherName'];?></p>
                  </div>
				   <div class="bio-row">
                      <p><span>Marital Status </span>: <?php echo $row['StudentMaritalStatus'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>Blood Group </span>: <?php echo $row['StudentBloodGroup'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>Address </span>: <?php echo $row['StudentAddress'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>City</span>: <?php echo $row['StudentCity'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>District</span>: <?php echo $row['StudentDistrict'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>Pincode</span>: <?php echo $row['StudentPincode'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>State </span>: <?php echo $row['StudentState'];?></p>
                  </div>
				  <div class="bio-row">
                      <p><span>Country</span>: <?php echo $row['StudentCountry'];?></p>
                  </div>
				
              </div> 
          </div>
      </div>
	  <?php } ?>
     
  </div>
</div>
</div>

<style type="text/css">
body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #fbc02d;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
	font-weight: bold;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
	font-size: 18px;
    font-weight: 280;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>