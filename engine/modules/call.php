<?php
/**
 =========================================================
 �������� ������: �������� ������ ��� DLE 9.5 � ����
 ---------------------------------------------------------
 ������: 1.1 ����� �� 15.07.2013
 ---------------------------------------------------------
 ���������������: ������� ������ (tcse-cms.com)
 ---------------------------------------------------------
 ����� ������: ������ ���� (kolos450@gmail.com)
 ---------------------------------------------------------
 ����: call.php
 ---------------------------------------------------------
 ����������: ����� �������� ����������� ���������� ����� �� ����������� � ������� �� �������� ������
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
		���: $name
		�������: $phone
		�����: $time
HTML;

	$mail = new dle_mail($config);
	$mail->from = $mail_sender;
        $bcc = array("sd@kj.kz", "hg@hg.kz");
        $mail->bcc = $bcc;
        
	$mail->send($mail_addr, "����� ������", $message);
        
	if($mail->send_error)
		msgbox($lang['all_info'], $mail->smtp_msg);
        
        
	msgbox("�����", "������ ������� ���������");
        //header('Location: http://airfit/');
       
}
else
{
	msgbox("������", "������ �������. ��������� �� ����������");
}


?>
