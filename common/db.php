<?php
$host="localhost";
$username="root";
$passowrd="null";
$database="discuss4775";

$conn = new mysqli($host,$username,$passowrd,$database);

if($conn->connect_error){
    die("not connected with DB".$conn->connect_error);
    
}
echo "database connected";
?>