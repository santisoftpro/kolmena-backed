<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once './assets/php/user.php';
$msg = '';
$user = new User();
if(isset($_GET['email']) && isset($_GET['token']))
{
    $email = $user->test_input($_GET['email']);
    $token = $user->test_input($_GET['token']);

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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Reset Password</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favcon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<form method="post" id="reset-form">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="assets/img/logo.png" alt="img">
</div>
<div class="login-userheading">
<h3>Sign In</h3>
<div class="text-center lead my-2"><?=$msg?></div>
<h4>Please Reset Password login to your account</h4>
</div>

<div class="form-login">
<label>New Password</label>
<div class="pass-group">
<input type="password" class="pass-input" name="pass" id="pass" placeholder="New password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">
<label>Password</label>
<div class="pass-group">
<input type="password" class="pass-input" name="cpass" id="cpass" placeholder="Confirm Password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">

</div>
<div class="form-login">
<button type="submit" name="submit" class="btn btn-login">Reset Password</buton>
</div>



</div>
</div>

<div class="login-img">
<img src="assets/img/login.jpg" alt="img">
</div>
</div>
</form>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="assets/js/dynamic/user.js"></script>
</body>
</html>