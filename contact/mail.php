<?php
$fname = $_POST['fname'];
$email = $_POST['email'];
$cno = $_POST['cno'];
$message = $_POST['message'];
require 'phpmailer/PHPMailerAutoload.php';
$body = "Hello Aashna!! My name is " . $fname . ". My email address is " . $email . " and my contact number is " . $cno . ". My message to you is as follows: " . $message;
$subject="Ank beats Contact: " . $fname;
$mail = new PHPMailer();
$mail->IsHTML(true); 
$mail->Host = "relay-hosting.secureserver.net"; // SMTP server
$mail->From = $email;
$mail->Subject = $subject;
$mail->Body = $body;
$mail->WordWrap = 50;
$mail->AddAddress("ankbeatsofficial@gmail.com");
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}