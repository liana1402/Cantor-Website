<?php
    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_name = "courses";
    
    try{
        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect. ";
    }
?>