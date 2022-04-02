<?php
include_once "dbconnect.php";
$sql = "DELETE FROM StudentInfo WHERE id=' " . $_GET["userid"] . "'";
if($conn->query($sql)==TRUE){
    echo "Data deleted sucessfully";
}
?>
