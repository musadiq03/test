 
<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
}

</script>

    </head>

   <body>
     <p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
	 <center>
	   <div id="select_box">

         <select onchange="fetch_select(this.value);">
           <option>
              Select state
           </option>
           
           <?php
include('config.php');
session_start();


  $user_check=$_SESSION['login_user'];
            
           
             $sql= "SELECT  c_id from course group by c_id";
             $result= $conn->query($sql);

             while($row=$result->fetch_assoc())
             {
              echo "<option>".$row['c_id']."</option>";
             }
           ?>

         </select>

         <select id="new_select">
         </select>
	  
       </div>     
	 </center>
	  
   
   </body>
</html>