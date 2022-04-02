<?php
    $servername = "localhost";
    $username = "User1";
    $password = "root123";
    $database = "Students";

    $con = new mysqli($servername, $username, $password, $database);
    if($con->connect_error){
        die("Connection error <br>");

    }

    $sql = "CREATE TABLE StudentInfo(
            id INT(6) AUTO_INCREMENT,
            firstame VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50) UNIQUE,
            adress VARCHAR(50) NOT NULL,
            PRIMARY KEY(id)
    )";

    if ($con->query($sql)==TRUE){
        echo "Table StudentInfo created sucessfully";
    }
    else{
        echo "Error occured in creating table in database";
    }
    $con->close();

?>