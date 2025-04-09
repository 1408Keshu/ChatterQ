<?php
session_start();
include('../common/db.php');
if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $user = $conn->prepare("Insert into `users`
         (`username`,`email`,`password`,`address`)
         values('$username','$email','$password','$address');  ");

    $result = $user->execute();

    if ($result) {
        // echo "New user registered";
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location: /PHP/CHATTER_Q");
    } else {
        echo "New user not registered";
    }
} 
else if (isset($_POST['login'])) {

   $email = $_POST['email'];
   $password = $_POST['password'];
   $query = "select * from users where email='$email' and password ='$password'";
   $result = $conn->query($query);
    // echo "hello";
   if($result->num_rows==1){
     foreach($result as $row){
        $username = $row['username'];
     }
     echo $username;
     $_SESSION["user"]=["username" => $username, "email" => $email ];
     header("location: /PHP/CHATTER_Q");
   }
   else{
    echo "New user not required";
   }
   
} 
   
else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /PHP/CHATTER_Q");
}
// else if(isset($_POST['login'])){
//     print_r($_POST);
// }
