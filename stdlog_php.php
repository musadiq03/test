<html>
<head>
</head>
<body>

<?php
include ('config.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	
if  (empty($_POST['std_email']) && empty($_POST['std_pass'])) {
$error = "please enter user name and password";
}
else
{
	
// Define $username and $password
$myusername=addslashes($_POST['std_email']); 
$mypassword=md5(addslashes($_POST['std_pass'])); 

$sql = "SELECT * FROM student WHERE user_name='$myusername' and  password='$mypassword'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
 $id = $row['s_id'] ;
}
print_r($sql);
if($result->num_rows==1){


$_SESSION['std_login_user']= $myusername;
$_SESSION['std_id']= $id;
header("location: std_log.php");
}
else {
header("location: err_std_log.php"); 
}
$conn->close();
}}

?>  

</body>
</html>