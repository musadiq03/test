<?php
   
    include('config.php');
session_start();


  $user_check=$_SESSION['login_user'];       
   if(isset($_POST['get_option']))
   {

      

     $state = $_POST['get_option'];
     $sql = "SELECT c_name from course where c_id='$state'";
    print_r($sql);
     $result= $conn->query($sql);
     while($row= $result->fetch_assoc())
     {
       echo "<option>".$row['c_id']."</option>";
     }
   
     exit;
   }

?>