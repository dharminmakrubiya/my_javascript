<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true); 
$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

$mail->addAddress("recepient1@example.com", "Recepient Name");
$mail->addAddress("recepient1@example.com");

$mail->addReplyTo("reply@yourdomain.com", "Reply");

$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "E-Mail has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}