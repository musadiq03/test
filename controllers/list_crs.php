<?php
 
session_start();
//header('Content-Type: application/json');
include('config.php');

$user_check=$_SESSION['std_id'];
/*$sql= "SELECT course.c_id, course.c_name, course.c_type from course inner join 
registration on course.c_id= registration.c_id where
s_id = (SELECT s_id from student where user_name= '$user_check')";*/

//$sql= "SELECT course.c_id, course.c_name, course.c_type, course.visible ,course.max_std , registration.c_id , registration.s_id from course, registration  WHERE
 //course.c_id= registration.c_id AND s_id =  '$user_check'";
$sql="SELECT course.c_id, course.c_name,course.c_type, course.visible, course.max_std, registration.s_id, COUNT(*) 
FROM registration
INNER JOIN course ON course.c_id = registration.c_id 
GROUP BY c_id";
$result = $conn->query($sql);

  
?>
