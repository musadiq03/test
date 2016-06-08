<?php
session_start();
include('config.php');

  $user_check=$_SESSION['std_login_user'];
$sql= "SELECT c_id, c_name, c_type, visible, max_std
FROM course
WHERE c_id NOT IN ( SELECT course.c_id FROM course inner join 
registration on course.c_id = registration.c_id where registration.s_id= 
(SELECT s_id from student where user_name= '$user_check') )";

 $result = $conn->query($sql);
 
 ?>