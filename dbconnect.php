<?php
$servername = "localhost";
$username = "User1";
$password = "root123";

// Create connection
$conn = new mysqli($servername,$username, $password,"Students");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>