

<?php
include ('config.php');
session_start(); 
$error=''; 
$check= $_POST['check_crs'];
if(isset($_POST['submit']))
 {

	for($i=0; $i<sizeof($check); $i++ ){
		$sql= "INSERT INTO registration (c_id,s_id) VALUES  ('".$check[$i]."','48')";
		$result= $conn->query($sql);
		header("location: std_log.php");
	}
}
	else {
		echo "no sub select";
	}

?>