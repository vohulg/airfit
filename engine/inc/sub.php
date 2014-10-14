<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2013 SoftNews Media Group
=====================================================
 Данный код защищен авторскими правами
=====================================================
 Файл: blockip.php
-----------------------------------------------------
 Назначение: Блокировка посетителей по IP
=====================================================
*/
if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
	die( "Hacking attempt!" );
}

if( ! $user_group[$member_id['user_group']]['admin_blockip'] ) {
	msg( "error", $lang['index_denied'], $lang['index_denied'] );
}

if( isset( $_POST['email[]'] ))
    echo $_POST['email[]'];


echoheader( "", "" );

echo <<<HTML
<h1> Рассылка </h1>
<form action="" method="post">
  <input type="checkbox" name="email[]" value="Bike"> I have a bike<br>
  <input type="checkbox" name="email[]" value="Car" checked> I have a car<br>
  <input type="submit" value="Submit">
</form>

HTML;




echofooter();
?>