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
					<li class="active"><a href="mainpro.php">Main</a></li>
					<li><a href="login.html">login</a></li>
					<li><a href="std_reg.php">Register</a></li>
					
				</div>
			</div>
		</nav>
		</ul>
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
  <div class="alert alert-danger">
    <strong>Alert!</strong> Username or Password incorrect.
  </div>
 
		</div>
</body>
</html>