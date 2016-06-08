 <?php
 
session_start();
include('config.php');
 $sqli= "SELECT COUNT(*) from registration where c_id= '$id'";

$res1 = $conn->query($sqli);
?>