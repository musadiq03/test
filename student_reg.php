<?php
include "config.php";
if($_POST[ 'std_user' ]!="") {
$name = (addslashes($_POST["std_name"]));
$email = addslashes($_POST["std_user"]);
$password = md5(addslashes($_POST["std_pass"]));
$class = addslashes($_POST["std_class"]);
$date = addslashes($_POST["std_date"]);

$sql = "SELECT * FROM student WHERE user_name='$email'";
$result = $conn->query($sql);
if($result->num_rows==1){
echo "<script type=\"text/javascript\">window.alert('You already registered.');
window.location.href = '/bootstrap/std_login.php';</script>"; 
//header("location: std_reg.php"); // Redirecting To Other Page
}
else {
try{
        $sql = "INSERT INTO `student` (name, password, user_name, class, admission_date) 
        VALUES ('$name', '$password', '$email','$class','$date')";

$sth = $conn->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}
finally{}
$msg = '
<p>Thank you for completing your online registration form!.';
}
}else{
$msg = "please fill the required fields";
}	

?>
<div class="thanks-text">
<?php echo $msg?>
