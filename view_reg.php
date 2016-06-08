<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
	<meta charset="uft-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cust.css">
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<div class="panel panel-defult">
	<div class="panel-body color">
	
		
		<nav class="navbar navbar-defult">
			<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav">
					<li class="active"><a href="mainpro.html">Main</a></li>
					
				</div>
			</div>
		</nav>
		</ul>
		<h1> Hello Admin</h1>
		
  <div class="row">
    <nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="admin_log.php">Create course</a></li>
       <!-- <li><a href="update_crs.html">Update course</a></li>
        <li><a href="delete_crs.html">Delete course</a></li> -->
        <li class="active"><a href="view_course.php">View courses</a> </li>
         <li><a href="reg_std_crs.html">Register student course</a> </li>
          <li><a href="cancle_reg.html">Cnacle registration</a> </li>
      </ul>
    </nav>
    <h2>View Courses</h2>
<?php
 
session_start();
include('config.php');



  $user_check=$_SESSION['login_user'];
$sql= "SELECT c_id, c_name, c_type , max_std, reg_date,  visible FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
     while($row = $result->fetch_assoc()) {
    
  echo "<div class='cell'>";
  
  echo "<div class='main'>".$row['c_id']. "</div>";
  
  echo "<div class='main'> ".$row['c_name']."</div>";
   echo "<div class='main'> ".$row['c_type']."</div>";
    
    echo "<div class='main1'><a href='del_crs_php.php?id=".$row['c_id']."'> Del </a></div>";
    echo "<div class='main1'><a href='update_crs.php?id=".$row['c_id']."'> edit </a></div>";

echo "<div class='main1'> ".$row['visible']."</div>";
echo "<div class='main1'> ".$row['reg_date']."</div>";
 echo "<div class='main1'> ".$row['max_std']."</div></div>";
  

// echo  "<div class='col-md-2' style='background-color:lavender; border: 20px' ></div>";
   // echo "<div class='cell'>mm ejjbu";
 //   echo "<div class='main'>mm jjbu</div></div>";
     }
     
} else {
     echo "0 results";
}

$conn->close();

?>  

  
</body>
</html>