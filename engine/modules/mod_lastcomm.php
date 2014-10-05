<?php

/* ��������� �� ������������� ��������� '<i>DATALIFEENGINE</i>'. ��� ��������� ������������ � index.php 
� �� �������� TRUE ������������� � ���, ��� ���� ��������� � �������  include/require, � �� ������ �������. */

if(!defined('DATALIFEENGINE'))
{
  	die("Hacking attempt!");
}


/* ���������� ����� api, ��� ���� ����� ��� ����� ���� ������������ ������� ��� ������ � �����. */

include ('engine/api/api.class.php');



/* �������� ��������� ����������, ����������� � ���� � ������ lastcomm. ���������� ������ ����������� ����� 
����� ����, ��� �� ��������� � ����. �� ���� <b>lastcomm</b> � ��� ���� � ����� <i>/engine/cache/</i>, 
� <b>60</b> � ��� ����� ����� ���� � ��������. 
� ������ ������, ���� � �������� ����� ������ ������ �������, ��� 60 ������, �� ��� ����� �������� ����� � ��. */

$lastcomm=$dle_api->load_from_cache( "lastcomm", 60);


/* ��������� � ���� � ��� ��� ��� ����. ���� ����, �� ����� � ��. */

if (!$lastcomm) {


/* ���������� ������ � ��. �� ����������� � ������� ������� ������ $db. 
��������� PREFIX �������� �������, ��������� ��� ��������� cms. 
�������� �������� ������� ������ ���������, � ����� �� ����� ��������� ��� ��� ������. 
����������� ������� ������� � ���������� $sql. */

    $sql = $db->query("SELECT comments.post_id, comments.text, comments.autor, post.id, post.flag,
    post.category, post.date as newsdate, post.title, post.alt_name 
    FROM " . PREFIX . "_comments as comments, " . PREFIX . "_post as post 
    WHERE post.id=comments.post_id 
    ORDER BY comments.date DESC LIMIT 0,20");


/* � ������� ������� get_row() ������ $db ��������� ��������������� ������ ������ �� ����������� �������. 
���������� ��������� � ������ $row � ��������� ������� ������ ����� ������ */
 
    while ($row = $db->get_row($sql))
    {


/* ���� ����� �������� ��������� ������� */

        if (strlen($row['title']) > 50) {
     			$title = substr($row['title'], 0, 50)."...";
        } else {
     			$title = $row['title'];
        }



/* ��������� ������ �� ������� ������������. ���������� */

        $aname=urlencode($row['autor']);
        $name= "<a href=\"".$config['http_home_url']."user/".$aname."/\">". $row['autor'] .'</a>';


/* ��������� ����� ����������� � ���� ���� �������� ��� */

        $text = htmlspecialchars($row['text']);
        if (strlen($text) > 1024)  $text= substr($text, 0, 1024)."...";


/* ��������� ������ �� �������. ������ $config �������� ��� ��������� �������. 
� ��������� $config['http_home_url']  - ��� ��� ������. */

        $newslink = $config['http_home_url'].$row['post_id']."-".$row['alt_name'].".html";
        $hint = "onMouseover=\"showhint('$text', this, event, '');\"";
        $title = "<a title=\"".$text."\" href=\"".$newslink."\">".stripslashes($title)."</a>";


/* �������� ������ ��� ������ ����������� */

        $lastcomm.="�� $name � �������: <br /> $title <br /><br />";
    }

        $db->free();


/* �������� ���������� ������. ����� ������� ����������� � ��������� �����������, 
�������� ���� 'engine/api/api.class.php' ��� ������� ��� ���������������� */

    $dle_api->save_to_cache ( "lastcomm", $lastcomm);
} 


/* ������� ���������� ��������� */

    echo $lastcomm;
    
    ?>
