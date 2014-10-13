<?php

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
require(ENGINE_DIR.'/classes/templates.class.php');

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

$_REQUEST['skin'] = trim(totranslit($_REQUEST['skin'], false, false));

if( $_REQUEST['skin'] == "" OR !@is_dir( ROOT_DIR . '/templates/' . $_REQUEST['skin'] ) ) {
	die( "Hacking attempt!" );
}

//------------------------------------------------------------------------------------------//


$tpl = new dle_template( );
$tpl->dir = ROOT_DIR . '/templates/' . $_REQUEST['skin'];
define( 'TEMPLATE_DIR', $tpl->dir );

@header( "Content-type: text/html; charset=" . $config['charset'] );

//-------------------------------------------------------------------//

msgbox("Answer");
echo $tpl->result['info'];


?>
