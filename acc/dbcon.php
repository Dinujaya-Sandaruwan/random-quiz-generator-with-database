<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz_db";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){    //Create Connection
        die("Connection Failed - " . $conn->connect_error);   //error msg
    }else{
        // echo "connected";
    }
?>