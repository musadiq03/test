
<?php

session_start();
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  
  $db = new DataAccessLayer();
if(isset($_GET['id']))
{
$id=$_GET['id'];
//$sql= "DELETE from course where c_id='$id'";

//$result= $conn->query($sql);
//$params = array();
//$params['c_id'] = $id;
  
  $result= $db->deleteById("course","c_id", $id);
if($result)
{
header ('location:view_course.php');
}
}
mysqli_close($conn);
?>