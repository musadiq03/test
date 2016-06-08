<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <?php include "partials/scripts.php" ?>
</head>
<body>
<div class="container">

<div class="panel panel-defult">
	<div class="panel-body color">
	
		
	<?php include "partials/admin_header.php" ?>
	<div class="row">
		<h1> Hello Admin</h1>
		
  
    <nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="admin_log.php">Create course</a></li>
       
        <li><a href="view_course.php">View courses</a> </li>
         <li><a href="">Register student course</a> </li>
          <li><a href="">Cnacle registration</a> </li>
      </ul>
    </nav>
    <h2>Create a new course</h2>

      <div>
  <form  method="post" action="crt_crs.php" name= "form1" id = "form1">
    <div class="form-group">
      <label for="course name" >Course Name:</label>
      <input type="text" class="form-control-cust" id="crs_name" placeholder="Enter course name" name="crs_name" onblur="checkTextField(this);" required>
    </div>
    <div class="form-group">
      <label for="course type" >Course Type:</label>
      <input type="text" class="form-control-cust" id="crs_type" placeholder="Enter type" name="crs_type" required>
    </div>
     <div class="form-group">
      <label for="max student" style="margin-left: 282px">Max Student:</label>
      <input type="number" class="form-control-cust" id="max_std" placeholder="Enter max student" name="crs_max" required>
    </div>
     <div class="form-group">
      <label for="reg date" style="margin-left: 282px">Registration Date:</label>
      <input type="Date" data-provide="datepicker" data-date-format="dd/mm/yyyy" class="form-control-cust" id="reg_dates" name="crs_date" required>
    </div>
    <div class="form-group">
      <label for="reg date" style="margin-left: 282px">visible:</label>
      <select class="form-control-cust" name="crs_visible" >
      <option >----</option>
       <option >0</option>
        <option>1</option></select>
    </div>

    <button type="submit" onclick= "return config()" class="btn btn-default" style="margin-left: 282px" name="crt_btn">Submit</button>
  </form>
</div> 

</div>
</div>
</div>

		</div>
     <script>
function config(){

alert("Your course add successfully");
//if (del==true){

   
}
<script type="text/javascript">

            function check()
            {
                if (!frm1.crs_name.value)
                {
                    alert ("Please Enter a File Name");
                    return (false);
                }
                return (true);
            }

        </script>

  </script>
</body>
</html>