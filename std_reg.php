
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
  </form>
  <h1> Student Registration Form </h1>
		 <form action="student_reg.php" data-toggle="validator" method="post" class="">
     <div class="form-group ">
      <label  for="pwd">Name:</label>
      <input type="text" class="form-control" id="pwd" name="std_name" placeholder="Enter Name" required>
    </div>
		<div class="form-group">
      <label for="email">User Name:</label>
      <input type="email" class="form-control" id="email" name="std_user" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label  for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="std_pass" placeholder="Enter password" required>
    </div>
    
    <div class="form-group">
      <label  for="pwd">Class:</label>
      <input type="text" class="form-control" id="pwd" name="std_class" placeholder="Enter Class" required>
    </div>
    <div class="form-group">
      <label  for="date">Adress:</label>
      <input type="text" class="form-control" id="pwd" name="std_date" placeholder="Enter Adress" required>
    </div>
    
    
    <button type="submit" class="btn btn-default" name="Btn_stdreg"  >Register</button>
  </form>
	
		</div>
  </div>
</div>

</body>
</html>