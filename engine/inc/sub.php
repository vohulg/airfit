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
<h2> Рассылка </h2>

HTML;

   $db->query("SELECT id, email FROM " . USERPREFIX . "_vhsubscriber");
   
   
     
   while ( $row = $db->get_row() )
   {      
          //var_dump($row);
           echo '<input type="checkbox" class="vh-sub-email" name="email['.$row['id'].']" checked value="'.$row['id'].'"'.$row['email'].'">'.$row['email']. '<br>';      
       
   }
   
    $db->free();
  
  
          
          
echo <<<HTML
<input type="submit" id="vh-sub-submit" value="Submit">

    <script type="text/javascript"> 
    
    function post_email_list()
    {       
        var arr = new Array();
        $(":checked").each(function () {
                
              arr.push($(this).val());        
         }); 
    
    
    
    
    
    }
    
    
    $(document).ready(function(){
    
     $("#vh-sub-submit").click(function(){ post_email_list()  });
    
    
    });
    
    </script>
HTML;










echofooter();
?>