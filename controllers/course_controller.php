<?php
session_start();
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  
  $db = new DataAccessLayer();
  
  /*$sql= "SELECT c_id, c_name, c_type , max_std, reg_date,  visible FROM course";
  $result = $conn->query($sql);
  $conn->close();*/
  
  $params = array();
  $params[0]= "c_id";
  $params[1]= "c_name";
 $params[2]= "c_type";
  $params[3]= "max_std"; 
   $params[4]= "reg_date"; 
   $params[5]= "visible"; 
  $result = $db->selectFields("course",$params);
  
  mysqli_close($conn);
?>

