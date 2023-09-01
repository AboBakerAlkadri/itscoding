<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.elasticemail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 2525;

$mail->Username = "abobakeralkadri@gmail.com";
$mail->Password = "BB15259801626A2E89F43CB1B7A8AD48F3E1";

$mail->setFrom($email, $name);
$mail->addAddress("abo.alkadri@final.edu.tr", "AboBaker");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");