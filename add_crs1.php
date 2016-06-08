<?php

session_start();
header('Content-Type: application/json');
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  $db = new DataAccessLayer();
$user_check=$_SESSION['std_id'];
if(isset($_GET['id']))
{ 
$id=$_GET['id'];
$params['c_id']= $id;
$params['s_id']= $user_check;
$db->insert("registration", $params);
echo json_encode($data);
$status = 
}

?>
