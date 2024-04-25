<?php
include('smtp/PHPMailerAutoload.php');

if(isset($_POST['contactSend'])) {
    // Include the database connection file
    include './admin/mysqli/db.php';

    // Validate and sanitize input data
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $phone = mysqli_real_escape_string($conn, $_POST['userPhone']);
    $message = mysqli_real_escape_string($conn, $_POST['userMessage']);

    // Check if required fields are not empty
    if (!empty($firstName) && !empty($email) && !empty($message)) {
        // SQL query with prepared statement
        $sql = "INSERT INTO `contact`(`firstName`, `lastName`, `email`, `phone`, `msg`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $phone, $message);
            
            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $message = 'Thank you for contacting us!';
                echo smtp_mailer($email, $response, $e_message);
            } else {
                $message = 'Error: ' . mysqli_stmt_error($stmt);
            }
        } else {
            $message = 'Error: Unable to prepare statement';
        }

        // Close the statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        $message = 'Please fill in all required fields.';
    }
    
    // Display the message in HTML
    echo "<script>alert('$message');</script>";
    header("Location: index.php#contactus");
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
        return 'sending...';
    }
}
?>