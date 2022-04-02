<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action = "<?php $_PHP_SELF ?>" >
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname">
    <br><br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname">
    <br><br>
    <label for="email">Email</label>
    <input type="email" id='email' name="email">
    <br><br>
    <label for="address">address</label>
    <input type="text" id="address" name="address">
    <br><br>
    <button>Submit</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $servername = "localhost";
    $username = "User1";
    $password = "root123";
    $database = "Students";

    $con = new mysqli($servername, $username, $password, $database);

    if ($con->connect_error){
        echo "Connection failed".$con->connect_error;
    }


    $first_name = $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];


     $sql = "INSERT INTO StudentInfo(firstame,lastname,email,adress) VALUES('$first_name', '$last_name', '$email', '$address')";
     if($con->query($sql)==TRUE){
         echo "Data inserted sucessfully";
     }



     $con->close();
    }

    

   
   


?>