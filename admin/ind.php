<?php
require_once './assets/php/user.php';
$msg = '';
$user = new User();
if(isset($_GET['email']) && isset($_POST['token']))
{
    $email = $user->test_input($_GET['email']);
    $token = $user->test_input($_POST['token']);

    $auth_user = $user->reset_pass_auth($email, $token);

    if($auth_user != null)
    {
        if(isset($_POST['submit']))
        {
            $newpass = $_POST['pass'];
            $cnewpass = $_POST['cpass'];
            
            $hnewpass = password_hash($newpass,PASSWORD_DEFAULT);
            
            if($newpass == $cnewpass)
            {
                $user->update_new_pass($hnewpass, $email);
                $msg = 'Password Changed Successfully! <br> <a href="index.php">Login here</a>';

            }
            else{
                $msg = 'Password did not matched';
            }
        }
    }
    else{
        header("Location: index.php");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}


?>