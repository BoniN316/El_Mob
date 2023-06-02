<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '/home/c/cx40673/PHPMailer/src/PHPMailer.php';
require '/home/c/cx40673/PHPMailer/src/Exception.php';
require '/home/c/cx40673/PHPMailer/src/SMTP.php';



$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';



// Настройки SMTP

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;



$mail->Host = 'smtp.timeweb.ru';
$mail->Port = 465;
$mail->Username = 'admin@elakor-floor.ru';
$mail->Password = 'Wj3hEMXz';
$mail->SMTPSecure = 'ssl';



// От кого

$mail->setFrom('admin@elakor-floor.ru', 'Timeweb Test');



// Кому

$mail->addAddress('admin@elakor-floor.ru', 'Timeweb Test');



// Тема письма

$subject = 'It\'s worked';
$mail->Subject = $subject;



// Тело письма

$body = '<p><strong>«It\'s worked» </strong></p>';
$mail->msgHTML($body);



$mail->send();
?>