<?php
 include("includes/db_connection.php");
 extract($_POST);
 
 $username= $username;
 $password = $password;
 $query = "select * from user_info";
 $result = sql_select($query);
 print_r($result);
?>