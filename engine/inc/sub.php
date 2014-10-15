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

echoheader( "", "" );


if( isset( $_POST['email-2'] ))
    echo $_POST['email-2'];

echo <<<HTML
<h1> Рассылка </h1>
<form action="" method="post">
HTML;

   $db->query("SELECT id, email FROM " . USERPREFIX . "_vhsubscriber");
   while ( $row = $db->get_row() )
   {
       foreach ( $row as $key => $value ) 
       {
          echo '<input type="checkbox" name="" checked value="'.$value.'">'.$value. '<br>';
           
       }
   }
   
    $db->free();
  
  
          
          
echo <<<HTML
<input type="submit" value="Submit">
</form>
HTML;










echofooter();
?>