<?php
  session_start();
  header('Content-Type: application/json');
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  $db = new DataAccessLayer();
  $user_check=$_SESSION['std_id'];

  $data = array();

  if(isset($_GET['id']) && $_GET['id'] != "" && $user_check != "") { 

   $id=$_GET['id'];
    $params['c_id']= $id;
    $params['s_id']= $user_check;
    $result= $db->insert("registration", $params);

    if (is_numeric($result) == true) {
      $data['status'] = true;
      $data['msg'] = "Registered successfully";
    }
    else
    {
      $data['status'] = false;
      $data['msg']    = "no value return";
    }
  }
  
  else {
    $data['status'] = false;
    $data['msg'] = "Course or student id not found";
  }
    
  echo json_encode($data);
?>