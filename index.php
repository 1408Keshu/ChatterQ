<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP_Project:QRealm</title>
    <?php include('client\commonFile.php') ?>
</head>
<body>

<?php
session_start(); // Ensure session is started (place at the top if not already present)
include('client\header.php') ;

if (isset($_GET['signup']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
    include('client\signup.php');
}
else if (isset($_GET['login']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
    include('client\login.php');
}
?>
    
</body>
</html>
<?php 
?>