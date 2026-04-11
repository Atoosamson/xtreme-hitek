<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yourgmail@gmail.com';
    $mail->Password = 'your_app_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('yourgmail@gmail.com', 'Xtreme Hitek');
    $mail->addAddress('info@xtremehitek.com');

    $mail->Subject = "New Contact Message";
    $mail->Body = "Name: ".$_POST['name'].
                  "\nEmail: ".$_POST['email'].
                  "\nMessage: ".$_POST['message'];

    $mail->send();
    echo "Message sent successfully!";
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>