<?php
session_start();
require_once './user.php';
$user = new User();

if(isset($_POST["action"]) && $_POST["action"] == "register")
{
   $name = $user->test_input($_POST["name"]);
   $email = $user->test_input($_POST["email"]);
   $pass = $user->test_input($_POST["rpassword"]);
   $hpass = password_hash($pass, PASSWORD_DEFAULT);
   if($user->user_exist($email))
   {
    echo $user->showMessage('warning', 'This email is already registered');
   }

   else{
    if($user->register($name, $email, $hpass))
    {
        echo 'register';
        $_SESSION['user'] = $email;
    }
    else{
        echo $user->showMessage('danger', 'Something went wrong');

    }
   }
}

?> 