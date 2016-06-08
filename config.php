<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '123');
   define('DB_DATABASE', 'course_reg');
   $conn = mysqli_connect (DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if(! $conn)
{
die('Connection Failed'.mysql_error());
}
else{
	echo "";
}
?>