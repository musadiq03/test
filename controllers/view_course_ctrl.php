<?php

        session_start();
        include('config.php');    
        $sql= "SELECT c_id, c_name, c_type , max_std, reg_date,  visible FROM course";
        $result = $conn->query($sql);
        $conn->close();
      ?>