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



    //Recipients
    $mail->setFrom('helper@helpyapp.org', 'Helpy');
    $mail->addAddress('memojja1907@gmail.com');     // Add a recipient

    $mail->addAddress($gelen_mail);
   //$mail->addAddress('ugur.cibar@gmail.com');               // Name is optional
  // $mail->addAddress('savci.umutcan@gmail.com');     // Add a recipient
  // $mail->addAddress('bbuyukdereli14@ku.edu.tr');
   //$mail->addReplyTo('umutcan@helpyapp.org', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'hosgeldin';
    $mail->Body    = '<h1>Hoş geldin helper!</h1><br><img style="width:250px;height:550px;" src="http://helpyapp.org/img/screenshot/__(18).png" alt="">';
    $mail->AltBody = 'Hoş geldin helper!';
    

    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


header('Location: /',true,301); 



?>