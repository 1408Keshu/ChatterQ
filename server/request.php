<?php
if(isset($_POST['signup'])){
    // print_r($_POST);
        echo "User name is ".$_POST['username']."<br>";
        echo "User email is ".$_POST['email']."<br>";
        echo "User address is ".$_POST['address']."<br>";
        echo "User password is ".$_POST['password']."<br>";
        // echo "Hello this is request server";
    }
?>