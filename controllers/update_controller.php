 <?php
session_start();
  include "config.php";
  include"config/constants.php";
  include"DB/database.php";
  
  $db = new DataAccessLayer();
$user_check=$_SESSION['login_user'];
if(isset($_GET['id']))
{
$id=$_GET['id'];

//$sql= "SELECT * from course where c_id='$id'";

//$result = $conn->query($sql);

 // $params = array();
 // $params['c_id'] = $id;
  
  $result= $db->selectWhere("course", "c_id = '".$id. "'");
  $row= $result->fetch_assoc();
}
  
?>