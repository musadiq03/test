<!DOCTYPE html>
<?php include "controllers/update_controller.php" ?>
<html>
<head>
	<title>student login</title>
	 <?php include "partials/scripts.php" ?>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">

    <div class="panel panel-defult">
	  <div class="panel-body color">

		 <?php include "partials/admin_header.php" ?>
		 <h1> Hello Admin</h1>
		
     <div class="row">
     <?php include "partials/admin_menu.php" ?>
    <h2>Update Course</h2>
<body>
 
<form  role="form" method="post" action="update_crs_php.php"> 
  <div class="form-group">
      <label for="course name">select course id:</label>
      <input type="Dropdown" class="form-control-cust" readonly="readonly" name="c_id" id="drop_course"
      value="<?php echo $row['c_id']; ?>" />
    </div>
     <div class="form-group">
      <label for="course type">Course Name:</label>
      <input type="text" class="form-control-cust" id="c_name" name="c_name" value="<?php echo $row['c_name']; ?>">
    </div>
    <div class="form-group">
      <label for="max student" style="margin-left: 283px">Course Type:</label>
      <input type="text" class="form-control-cust" id="update_type" name="c_type" value="<?php echo $row['c_type']; ?>">
    </div>
     <div class="form-group">
      <label for="max student"style="margin-left: 283px">Max Student:</label>
      <input type="text" class="form-control-cust" id="update_max" name="max_std" value="<?php echo $row['max_std']; ?>">
    </div>
    <div class="form-group">
      <label for="reg date" style="margin-left: 283px">Registration Date:</label>
      <input type="Date" class="form-control-cust" id="update_reg" name="reg_date" value="<?php echo $row['reg_date']; ?>">
    </div>
    <div class="form-group">
      <select class="form-control-cust" name="crs_visible" value="<?php echo $row['visible']; ?>" >
      <option >----</option>
       <option >0</option>
        <option>1</option></select>
    <button type="submit" class="btn btn-default" name="submit" style="margin-left: 282px">Update</button>
  </form>
 
</div>
    </div>
    </div>
    </body>
    </html>
</body></html>