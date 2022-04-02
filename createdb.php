<?php
    $servername = "localhost";
    $username = "User1";
    $password = "root123";
    $conn = new mysqli($servername,$username, $password,'Students');
    if($conn->connect_error){
        echo "Error in connection <br>";
    }
    else{
        echo "Connected sucessfully <br>";
    }
    $sql= "CREATE DATABASE Newdb";
    if ($conn->query($sql)==TRUE){
        echo "Database name student created sucessfully";

    }
    else{
        echo " Error creating database: ".$conn->error;
    }
  
    $conn->close();
?>