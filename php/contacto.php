<?php

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$message = $_POST["message"];
$subject = $_POST["subject"];

$body = "";
$body .= "Nombre: ";
$body .= $name;
$body .= "<br>";
$body .= "E-mail: ";
$body .= $email;
$body .= "<br>";
$body .= "Teléfono: ";
$body .= $tel;
$body .= "<br>";
$body .= "Asunto: ";
$body .= $subject;
$body .= "<br>";
$body .= "Mensaje: ";
$body .= $message;
$body .= "<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
	$mail->Host = 'localhost';
	$mail->SMTPAuth = false;
	$mail->SMTPAutoTLS = false;
	$mail->Port = 25;

    //Recipients
    $mail->setFrom('luis@parapenteagencia.com', $name);
    $mail->addAddress('contacto@hopegroup.mx');     // Para Contacto
    $mail->addCC('carlos@parapenteagencia.com');     // Para Carlos
    $mail->addCC('luis@parapenteagencia.com');     // Para mí :v


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contacto Hope Group';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}