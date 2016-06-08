<?php
 

  include "config.php";
  
  
$sql="SELECT course.c_id, course.c_name, course.max_std, registration.s_id, COUNT(*) 
FROM registration
INNER JOIN course ON course.c_id = registration.c_id 
GROUP BY c_id";
print_r($sql);
echo "<br>";
$res = $conn->query($sql);
//$row = mysqli_fetch_array($res);
//$sql= "SELECT course.c_id, course.c_name, course.c_type, course.visible ,course.max_std , registration.c_id , registration.s_id from course, registration  WHERE
 //course.c_id= registration.c_id AND s_id =  '48'";
//$res = $conn->query($sql);

while($row = mysqli_fetch_array($res)) {
  echo "<table>";
  echo "<tr>";
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['c_name'] . "</td>";
echo "<td>" . $row['max_std'] . "</td>";
 // $id = $row['c_id'];
 // $sqli= "SELECT COUNT(*) from registration where c_id= '$id'";

//$res1 = $conn->query($sqli);
//while($row1 = mysqli_fetch_array($res1)) {


echo "<td>" . $row['COUNT(*)'] . "</td></tr></table>";  
//$result2= $db->totalRows("registration", "c_id = '11'","");
  
 // print_r($result2);
}
?>

 

