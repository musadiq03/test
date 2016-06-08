<?php
  session_start();
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  
  $db = new DataAccessLayer();

  $error='';

  $user_check=$_SESSION["login_user"];
  $cname=addslashes($_POST["crs_name"]); 
  $ctype=addslashes($_POST["crs_type"]); 
  $cmax=addslashes($_POST["crs_max"]);
  $cdate=addslashes($_POST["crs_date"]);
  $cvisible=addslashes($_POST["crs_visible"]);


 // $sql = "INSERT INTO course (c_name, c_type, max_std, c_date , reg_date, visible) 
   //     VALUES ('$cname', '$ctype', '$cmax', now() ,'$cdate',  '$cvisible')";
  $params = array();
  $params['c_name'] = $cname;
  $params['c_type'] = $ctype;
  $params['max_std'] = $cmax;
   $params['c_date'] = date_add();
  $params['reg_date'] = $cdate;
 
  $params['visible'] = $cvisible;


  $db->insert("course", $params);
  mysqli_close($conn);
header("location:admin_log.php");
?>
