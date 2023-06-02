<?php
if (isset($_POST['cf_area'])) {$cf_area = $_POST['cf_area'];}
if (isset($_POST['cf_naznach'])) {$cf_naznach = $_POST['cf_naznach'];}
if (isset($_POST['cf_nagr'])) {$cf_nagr = $_POST['cf_nagr'];}
if (isset($_POST['cf_poverh'])) {$cf_poverh = $_POST['cf_poverh'];}
if (isset($_POST['cf_marka'])) {$cf_marka = $_POST['cf_marka'];}
if (isset($_POST['cf_pokritie'])) {$cf_pokritie = $_POST['cf_pokritie'];}
if (isset($_POST['cf_cvet'])) {$cf_cvet = $_POST['cf_cvet'];}
if (isset($_POST['cf_blesk'])) {$cf_blesk = $_POST['cf_blesk'];}
if (isset($_POST['cf_shpat'])) {$cf_shpat = $_POST['cf_shpat'];}
if (isset($_POST['cf_osob'])) {$cf_osob = $_POST['cf_osob'];}

if (isset($_POST['cf_name'])) {$cf_name = $_POST['cf_name'];}
if (isset($_POST['cf_phone'])) {$cf_phone = $_POST['cf_phone'];}
if (isset($_POST['cf_mail'])) {$cf_mail = $_POST['cf_mail'];}
if (isset($_POST['cf_prim'])) {$cf_prim = $_POST['cf_prim'];}
if (isset($_POST['cf_req'])) {$cf_req = $_POST['cf_req'];}

if (isset($_POST['capcha'])) {$capcha = strtoupper($_POST['capcha']);}

$errors = '';

if ($cf_name == '') {$errors .= '<p class="cf_error">Введите контактное лицо</p>';}
if ($cf_phone == '') {$errors .= '<p class="cf_error">Введите телефон</p>';}
if ($capcha != $_SESSION['capcha']) {$errors .= '<p class="cf_error">Не правильно введен код с картинки</p>';}

//Проверка email
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$cf_mail)) {
	$cf_mail = 'Email не заполнен';
	$errors .= '<p class="cf_error">Не правильно введен email</p>';

	//Можно вывести email магазина, но тогда письмо придет само себе.
 	//$cf_mail = MG::getSetting('adminEmail');
}


$to =MAILADMIN ; //Укажите ваш адрес электронной почты
$headers = 'Content-type: text/html; charset = utf8'."\r\n";
$headers .= 'From: '.MAILSENDER."\r\n".
'Reply-To: '.$cf_mail."\r\n";
$subject = 'Заявка со страницы "Заказать консультацию"';
$message = '<h1>Заявка со страницы "Заказать консультацию"</h1>

<p><strong>Имя: </strong>'.$cf_name.'</p>
<p><strong>Телефон: </strong>'.$cf_phone.'</p>
<p><strong>Email: </strong> '.$cf_mail.'</p>
<p><strong>Примечания: </strong>'.$cf_prim.'</p>
<p><strong>Реквизиты: </strong>'.$cf_req.'</p>

<p><strong>Площадь: </strong>'.$cf_area.'</p>
<p><strong>Назначение помещения: </strong>'.$cf_naznach.'</p>
<p><strong>Нагрузки: </strong>'.$cf_nagr.'</p>
<p><strong>Поверхность: </strong>'.$cf_poverh.'</p>
<p><strong>Марка М (Класс В): </strong>'.$cf_marka.'</p>
<p><strong>Тип покрытия: </strong>'.$cf_pokritie.'</p>
<p><strong>Цвет: </strong>'.$cf_cvet.'</p>
<p><strong>Блеск: </strong>'.$cf_blesk.'</p>
<p><strong>Необходимость шпатлевания: </strong>'.$cf_shpat.'</p>
<p><strong>Особенности: </strong>'.$cf_osob.'</p>';

if ($errors != '') {
	echo $errors;
}
else {
	$send = mail($to, $subject, $message, $headers);
	if ($send == 'true') {

    echo '<p style="background:#008000; color: #f7ff00;padding:71px;">Благодарим за Ваш выбор! Заявка успешно отправлена. Наши специалисты свяжутся с Вами.</p><br>';
echo '<a  href="https://moguta.elakor-floor.ru">На главную</a>';





   } else {
	    echo '<p class="cf_error">Сообщение не отправлено. Приносим свои извинения.<br>Попробуйте повторить отправку позже.</p>';


    }}

?>