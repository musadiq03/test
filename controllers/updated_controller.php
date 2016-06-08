<?php
include('config.php');
session_start();


  $user_check=$_SESSION['login_user'];

$id=$_GET['id'];


$c_id = $_POST['c_id']; 
$name=$_POST['c_name'];
$c_type=$_POST['c_type'];
$c_max_std= $_POST['max_std'];
$c_date= $_POST['reg_date'];
$sqli= "UPDATE course SET c_name='$name', c_type='$c_type', max_std='$c_max_std', reg_date='$c_date' where c_id='$c_id'";
$result1 = $conn->query($sqli);
if($result1)
{
header('location:view_course.php');
}

?>