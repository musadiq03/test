<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
	 <?php include "partials/scripts.php" ?>
</head>
<?php
include('admin_login_php.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin_log.php");
}
?>
<body>
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
    <?php include "partials/menu.php" ?>
		<h1> Hello Admin</h1>
		 <form class="form-inline" method="post" action="admin_login_php.php">
		<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="admin_user" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label  for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="admin_pass" placeholder="Enter password">
    </div>
    
    <button type="submit" class="btn btn-default" name= "btn_admin" >Submit</button>
  </form>
		</div>
  </div>
</div>

</body>
</html>