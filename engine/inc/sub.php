<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2013 SoftNews Media Group
=====================================================
 ������ ��� ������� ���������� �������
=====================================================
 ����: blockip.php
-----------------------------------------------------
 ����������: ���������� ����������� �� IP
=====================================================
*/
if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
	die( "Hacking attempt!" );
}

if( ! $user_group[$member_id['user_group']]['admin_blockip'] ) {
	msg( "error", $lang['index_denied'], $lang['index_denied'] );
}



echoheader( "", "" );

echo <<<HTML
<h1> �������� </h1>

HTML;


echofooter();
?>