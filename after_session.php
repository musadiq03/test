<?php
session_start();
if(!session_is_registered(myusername)){
header("location:std_reg.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>