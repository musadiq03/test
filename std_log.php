<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
	<?php include "partials/scripts.php" ?>
</head>
<body>
<div class="container">
<div class="panel panel-defult">
	<div class="panel-body color">
		<?php include "partials/std_header.php" ?>
		<div class="col-sm-3">
      <h1>Student</h1>
    </div>
    <div class="col-sm-9">
      <h1>View Courses</h1>
    </div>
  </div>
  <div class="row">
    <?php include "partials/std_menu.php" ?>
    <div class="col-sm-9">
     <table class="table table-striped">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Type</th>
          <th>Max std</th>
          <th>Enrolled Std</th>
          <th>remove</th>
          <th>Add</th>
        </tr>
    </div>
<?php
session_start();
 include "controllers/list_crs.php";
 
 while($row = $result->fetch_assoc()) 
     {
      //$id = $row['c_id'];
     //include "controllers/enroll.php";
 //while($row1 = mysqli_fetch_array($res1)) {
     
      if ($row['visible'] != 0) {
        
?>
       <tr>
            <td><?php echo $row['c_id'] ?></td>
            <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['c_type']?></td>
            <td><?php echo $row['max_std']?></td>
            <td><?php echo $row['COUNT(*)']?></td>
            <td><a class="removelink" id="removecourse<?php echo $row['c_id'] ?>"  onclick= 'return deleletconfig()'  href="#" data-course-id="<?php echo $row['c_id'] ?>">Remove</a></td>
            <td><a class="addlink disabled" id="addcourse<?php echo $row['c_id'] ?>" href="#" data-course-id="<?php echo $row['c_id'] ?>" style= "color : red " >Add </a> </td>
            
            <td><?php echo $row['reg_date']?></td> 
         </tr>
 <?php
 
//}
 }}
include "controllers/list_crs2.php";

     while($row = $result->fetch_assoc()) {
       $id = $row['c_id'];
      include "controllers/enroll.php";
        while($row1 = mysqli_fetch_array($res1)) {
       if ($row['visible'] != 0) {
 ?>
         <tr>
            <td><?php echo $row['c_id'] ?></td>
            <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['c_type']?></td>
            <td><?php echo $row['max_std']?></td>
            <td><?php echo $row1['COUNT(*)']?></td>
            <td><a class="removelink disabled" id="removecourse<?php echo $row['c_id'] ?>" onclick= 'return deleletconfig()' style= "color : red "   href="#" data-course-id="<?php echo $row['c_id'] ?>"> Remove </a> </td>
            <td><a class="addlink" id="addcourse<?php echo $row['c_id'] ?>" href="#" data-course-id="<?php echo $row['c_id'] ?>"  >Add</a></td>
         </tr>
<?php   }
}}
$conn->close();
?>  
</table>
    </div>
    <style>
.intro {
    
    color: red;
}
</style>
<script>

  function deleletconfig() 
  {
    var del=confirm("Are you sure you want to delete this course?");
    if (del==true){
    }
    return del;
  }

$(document).ready(function(){

  $(document).on("click", ".addlink", function() {
   
      var course_id = $(this).data("course-id");
debugger;
      $.ajax({

      type: "GET",
      dataType: "json",
      url: "remove_crs.php",
      data: "id="+ $(this).data("course-id")+"&flag=1",
       
      success: function(data) {
          debugger;
        if(data.status == true) {
          $("#addcourse"+ course_id).addClass("disabled");
           $("#addcourse"+ course_id).css("color", "red"); 
          $("#removecourse"+ course_id).removeClass("disabled");
          $("#removecourse"+ course_id).css("color","#337ab7")
        }
        else
{
          console.log("Failure");
 }
      }
    });
  })
  $(document).on("click", ".removelink", function() {
   
      var course_id = $(this).data("course-id");

      $.ajax({
      type: "GET",
      dataType: "json",
      url: "remove_crs.php",
      data: "id="+ $(this).data("course-id")+"&flag=0",
       success: function(data)
      {
 
debugger;
        if(data.status == true) {
          $("#removecourse"+ course_id).addClass("disabled");
           $("#removecourse"+ course_id).css("color", "red"); 
          $("#addcourse"+ course_id).removeClass("disabled");
          $("#addcourse"+ course_id).css("color","#337ab7")
        }
        else
{
          console.log("Remove Failure");
      }
    },
   error: function (jqXHR, status, err) {
    debugger;
    alert("Local error callback.");
  },
    });
  })

  // on load function
  $(document).on("load", function() {
   
      var course_id = $(this).data("course-id");

      $.ajax({
      type: "GET",
      dataType: "json",
      url: "list_crs.php",
      data: "id="+ $(this).data("course-id")+"&flag=0",
       success: function(data)
      {
 
debugger;
        if(data.status == true) {
          $("#removecourse"+ course_id).addClass("disabled");
           $("#removecourse"+ course_id).css("color", "red"); 
          $("#addcourse"+ course_id).removeClass("disabled");
          $("#addcourse"+ course_id).css("color","#337ab7")
        }
        else
{
          console.log("Remove Failure");
      }
    },
   error: function (jqXHR, status, err) {
    debugger;
    alert("Local error callback.");
  },
    });
  })
});
</script>
</body>
</html>