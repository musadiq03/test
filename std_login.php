<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
<?php include "partials/scripts.php" ?>
</head>

<body>
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
    <?php include "partials/menu.php" ?>
		<h1> Hello Student</h1>
		 <form class="form-inline" action="stdlog_php.php" method="post">
		<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  placeholder="Enter email" name="std_email" required>
    </div>
    <div class="form-group">
      <label  for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="std_pass" required>
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
  </div>
</div>
</div>
  		
</body>
</html>