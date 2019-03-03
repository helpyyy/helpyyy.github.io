<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$webmaster_email = "helper@helpyapp.org";
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $gelen_mail = $_POST["email"];
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host ='remedy.guzelhosting.com';// 'mail.helpyapp.org' ; // 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->Username =  $webmaster_email ; //'user@example.com';                 // SMTP username
    $mail->Password = '!He1pY2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;  // 465; //                                  // TCP port to connect to

    $name  =  $_POST["name"];
    $email =  $_POST["email"];
    $msg_subject = $_POST["msg_subject"];
    $message =   $_POST["message"];

    $mail->setFrom('helper@helpyapp.org', 'Helpy');
    $mail->addAddress('info@helpyapp.org');     // Add a recipient
   //$mail->addAddress('savci.umutcan@gmail.com');     // Add a recipient
   //$mail->addAddress('bbuyukdereli14@ku.edu.tr');
    $mail->addAddress('memojja1907@gmail.com');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = utf8_encode ( 'biri bizi gözektliyor! [ ' . $msg_subject . ' ]');
    $mail->Body    = utf8_encode ('<b>' . $name . '</b>' . 'adlı kişi.Bize şunları yazmış : ' . '<br>'.   $message . '<br>'. 'Email : ' .   $email);
    $mail->AltBody = utf8_encode ('biri bizi gözetliyor!');

   
    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


header('Location: /',true,301); 



?>