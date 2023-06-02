<?php

/**
 * Класс Mailer - предназначен для работы с почтой.
 * - Отправляет письма в корректной кодировке
 * - Доступен из любой точки программы.
 *
 * @author Авдеев Марк <mark-avdeev@mail.ru>
 * @package moguta.cms
 * @subpackage Libraries
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'https://moguta.elakor-floor.ru/mg-core/lib/PHPMailer.php';
require 'https://moguta.elakor-floor.ru/mg-core/lib/Exception.php';
require 'https://moguta.elakor-floor.ru/mg-core/lib/SMTP.php';




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

$subject = 'заявка';
$mail->Subject = $subject;



// Тело письма

$body = '<p><strong>«заявка» </strong></p>';
$mail->msgHTML($body);



$mail->send();

?>