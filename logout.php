<?php
session_start();
// remove all session variables
session_unset(); 

$_SESSION = array();
// destroy the session 
session_destroy();

header("location: mainpro.php");
?>
