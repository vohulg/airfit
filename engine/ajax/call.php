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
@error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_WARNING ^ E_NOTICE );

define( 'DATALIFEENGINE', true );
define( 'ROOT_DIR', substr( dirname(  __FILE__ ), 0, -12 ) );
define( 'ENGINE_DIR', ROOT_DIR . '/engine' );

include ENGINE_DIR . '/data/config.php';

if( $config['http_home_url'] == "" ) {
	
	$config['http_home_url'] = explode( "engine/ajax/editnews.php", $_SERVER['PHP_SELF'] );
	$config['http_home_url'] = reset( $config['http_home_url'] );
	$config['http_home_url'] = "http://" . $_SERVER['HTTP_HOST'] . $config['http_home_url'];

}

require_once ENGINE_DIR . '/classes/mysql.php';
require_once ENGINE_DIR . '/data/dbconfig.php';
require_once ENGINE_DIR . '/modules/functions.php';

dle_session();

$_COOKIE['dle_skin'] = trim(totranslit( $_COOKIE['dle_skin'], false, false ));
$_TIME = time () + ($config['date_adjust'] * 60);

if( $_COOKIE['dle_skin'] ) {
	if( @is_dir( ROOT_DIR . '/templates/' . $_COOKIE['dle_skin'] ) ) {
		$config['skin'] = $_COOKIE['dle_skin'];
	}
}

if( $config["lang_" . $config['skin']] ) {

	if ( file_exists( ROOT_DIR . '/language/' . $config["lang_" . $config['skin']] . '/website.lng' ) ) {	
		include_once ROOT_DIR . '/language/' . $config["lang_" . $config['skin']] . '/website.lng';
	} else die("Language file not found");

} else {
	
	include_once ROOT_DIR . '/language/' . $config['langs'] . '/website.lng';

}
$config['charset'] = ($lang['charset'] != '') ? $lang['charset'] : $config['charset'];

@header( "Content-type: text/html; charset=" . $config['charset'] );

//-------------------------------------------------------------------//

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
        
	$mail->send($mail_addr, "Заказ звонка jquery", $message);
        
	if($mail->send_error)
		echo "{\"status\": \"error\",\"text\": \"{$mail->smtp_msg}\"}";
               
		echo "ok";
        
       
}
else
{
	echo "error";
}


?>
