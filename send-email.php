<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require __DIR__ . '/vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "andrewsandersmtp@gmail.com";
$mail->Password = "qosqcsujezhiprow";

$mail->setFrom($email, $name);
$mail->addAddress("andrsand1@gmail.com", "Andrew");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
