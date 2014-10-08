<?php
/**
 =========================================================
 Название модуля: Обратный звонок для DLE 9.5 и выше
 ---------------------------------------------------------
 Версия: 1.1 релиз от 15.07.2013
 ---------------------------------------------------------
 Правообладатель: Виталий Чуяков (tcse-cms.com)
 ---------------------------------------------------------
 Автор версии: Кирилл Родэ (kolos450@gmail.com)
 ---------------------------------------------------------
 Файл: call.php
 ---------------------------------------------------------
 Назначение: Форма отправки уведомлений владельцам сайта от посетителей о запросе на обратный звонок
 ==========================================================
*/
if(!defined('DATALIFEENGINE'))
{
	die("Hacking attempt!");
}

$mail_addr = "vohulg@gmail.com";
$mail_sender = "call@airfit.com";

include_once ENGINE_DIR . '/classes/mail.class.php';

if($_POST['call'] == 'send')
{
	$name = strip_tags(stripslashes($_POST['name']));
	$phone = strip_tags(stripslashes($_POST['phone']));
	$time = strip_tags(stripslashes($_POST['time']));
	$message = <<<HTML
		Имя: $name
		Телефон: $phone
		Время: $time
HTML;

	$mail = new dle_mail($config);
	$mail->from = $mail_sender;
        $bcc = array("sd@kj.kz", "hg@hg.kz");
        $mail->bcc = $bcc;
        
	$mail->send($mail_addr, "Заказ звонка", $message);
        
	if($mail->send_error)
		msgbox($lang['all_info'], $mail->smtp_msg);
        
        
	msgbox("Успех", "Запрос успешно отправлен");
        //header('Location: http://airfit/');
       
}
else
{
	msgbox("Ошибка", "Ошибка доступа. Сообщение не отправлено");
}


?>
