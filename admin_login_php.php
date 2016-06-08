<html>
<head>
</head>
<body>

<?php
include ('config.php');
 include"config/constants.php";
  include"DB/database.php";
session_start();
 $db = new DataAccessLayer();
$error='';
if (isset($_POST['btn_admin'])) {
	
if  (empty($_POST['admin_user']) || empty($_POST['admin_pass'])) {
$error = "please enter user name and password";
}
else
{
	
// Define $username and $password
//	$myusername=$_POST['admin_user']; 
//	$mypassword=$_POST['admin_pass']; 

//	$params = array();
  //$params['user_name'] = $myusername;
  //$params['password'] = $mypassword;
 

  //$db->selectWhere("admin", $params);
  //mysqli_close($conn);
$myusername=$_POST['admin_user']; 
$mypassword=$_POST['admin_pass']; 

$sql = "SELECT * FROM admin WHERE user_name='$myusername' and  password='$mypassword'";
$result = $conn->query($sql);
print_r($sql);
if($result->num_rows==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['login_user']=$myusername; // Initializing Session
header("location: admin_log.php"); // Redirecting To Other Page
}
else {
echo "Wrong Username or Password";
}
$conn->close();
}}

?>  

</body>
</html>