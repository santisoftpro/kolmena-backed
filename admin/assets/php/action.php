<?php
session_start();

include('smtp/PHPMailerAutoload.php');
$mail = new PHPMailer(true);

require_once './user.php';

$user = new User();
// registerinng user
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
// login ajax request
if(isset($_POST["action"]) && $_POST["action"] == "login")
{
 $email = $user->test_input($_POST['email']);
 $pass = $user->test_input($_POST['password']);

 $loggedInUser = $user->login($email);
 if($loggedInUser != null)
 {
    if(password_verify($pass, $loggedInUser['password'])){
        // if(!empty($_POST['rem']))
        // {
        //     setcookie('email', $email, time()+ (30*24*60*60),'/');
        //     setcookie('pass', $pass, time()+ (30*24*60*60),'/');
        // }
        // else{
        //     setcookie("email", "",1,"/");
        // }
        echo 'login';
        $_SESSION['user'] = $email;
    }
    else{
        echo $user->showMessage('danger', 'Password is incorrect');
    }
 }
 else{
    echo $user->showMessage('danger', 'User not found');
 }

}

// handle forgot passworf ajax request

if(isset($_POST['action']) && $_POST['action']=='forgot')
{
    $email = $user->test_input($_POST['email']);
    $user_found = $user->currentUser($email);
    if($user_found != null)
        {
          $token = uniqid();
          $token = str_shuffle($token);

          $user->forgot_password($token,$email);

          $msg = '<h3>Click the below link to reset your password.<br><a href="http://localhost/kolmena/admin/reset-pass.php?email='.$email.'&token='.$token.'">http://localhost/kolmena/admin/reset-pass.php?email='.$email.'&token='.$token.' </a><br>Regards<br>Kolmena</h3>';

          try {


            // echo smtp_mailer($email, 'Reset Password', $msg);
      
            // Send the email
            if (smtp_mailer($email, 'Reset Password', $msg)) {
                echo $user->showMessage('success', 'We have sent you the reset link to your email. Please check your inbox.');
            } else {
                echo $user->showMessage('danger', 'Something went wrong while sending the email. Please try again later.');
            }
        } catch (Exception $e) {
            echo $user->showMessage('danger', 'An error occurred: ' . $mail->ErrorInfo);
        }
        
        }
        else{
            echo $user->showMessage('info', 'This e-mail is not registered');
        }
}

function smtp_mailer($to, $subject, $msg)
{

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "andrewellicky97@gmail.com";
    $mail->Password = "orqehkhbucxteplp";
    // $mail->SetFrom("");
    $mail->setFrom('andrewellicky97@gmail.com', 'Kolmena Group');
    $mail->Subject = $subject;
    $mail->Body = 'greeting!! ' . $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
        
    } else {
        return true;
    }
}

?> 