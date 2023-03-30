<?php

if (!class_exists('PHPMailer\PHPMailer\Exception'))
{
require 'assets/vendor/php-email-form/Exception.php';
require 'assets/vendor/php-email-form/PHPMailer.php';
require 'assets/vendor/php-email-form/SMTP.php';
}

//use PHPMailer,PHPMailer,PHPMailer; 

//require_once 'phpmailer/Exception.php';
//require_once 'phpmailer/PHPmailer.php';
//require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bhoinitin655@gmail.com'; // eamil address which you want to use as SMTP server
        $mail->Password = 'Katukaiseratanosavarejiyanahijatasunbawareoratanlambiyanlambiyanre65@'; // Gmail address pass
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTLS;
        $mail->Port = '587';

        $mail->setFrom('bhoinitin655@gmail.com'); // Gmail address you used as SMTP server
        $mail->addAddress('bhoinitin655@gmail.com'); // Email address where you can receive emails(both may be same)

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body ='<hr>Name : $name <br>Email : $email <br>Message : $message </h3>';
        $alert = '<div class="alert-success">
                    <span> Message Sent! Thank You for contacting us. </span>
                </div';



    }   catch (Exception $e){
        $alert = 'div class = "aler-error">
                    <span> '.$e->getMessage().'</span>
                  </div>';
    }

?>