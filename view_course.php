<?php include "controllers/course_controller.php" ?>
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
      <?php include "partials/admin_header.php" ?>
    </div>
    <div class="col-sm-3">
      <h1>Admin</h1>
    </div>
    <div class="col-sm-9">
      <h1>View Courses</h1>
    </div>
  </div>    
  <div class="row">
    <?php include "partials/admin_menu.php" ?>
    <div class="col-sm-9">
     <table class="table table-striped">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Type</th>
          <th>Max Std</th>
          <th>Reg Date</th>
          <th>Visible</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row['c_id'] ?></td>
            <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['c_type']?></td>
            <td><?php echo $row['max_std']?></td>
            <td><?php echo $row['reg_date']?></td>
            <td><?php echo  var_dump(filter_var($row['visible'], FILTER_VALIDATE_BOOLEAN));?></td>
            <td><a  href="update_crs.php?id=<?php echo $row['c_id']?>">Edit</a></td>
            <td><a  onclick= 'return deleletconfig()' href="del_crs_php.php?id=<?php echo $row['c_id']?>">Delete</a></td>
          </tr>
          <?php 
        }?>
     </table>
    </div>
    <script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this course?");
if (del==true){

   
}
return del;
}
  </script>
  
</body>
</html>