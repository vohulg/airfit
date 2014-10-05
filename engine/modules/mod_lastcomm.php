<?php

/* Проверяем на существование константы '<i>DATALIFEENGINE</i>'. Эта константа определяется в index.php 
и ее значение TRUE символизирует о том, что файл подключен с помощью  include/require, а не просто запущен. */

if(!defined('DATALIFEENGINE'))
{
  	die("Hacking attempt!");
}


/* Подключаем класс api, для того чтобы нам можно было использовать функции для работы с кэшем. */

include ('engine/api/api.class.php');



/* Пытаемся прочетать информацию, сохраненную в кэше с именем lastcomm. Рекомендую давать осмысленные имена 
всему тому, что мы сохраняем в кэше. По сути <b>lastcomm</b> – это файл в папке <i>/engine/cache/</i>, 
а <b>60</b> – это время жизни кэша в секундах. 
В данном случае, если с создания файла прошло больше времени, чем 60 секунд, то нам снова придется лезть в бд. */

$lastcomm=$dle_api->load_from_cache( "lastcomm", 60);


/* Проверяем – есть у нас кэш или нету. Если нету, то лезем в бд. */

if (!$lastcomm) {


/* Собственно запрос в бд. Он выполняется с помощью функции класса $db. 
Константа PREFIX содержит префикс, указанный при установки cms. 
Названия столбцов названы вполне нормально, я думаю не нужно объяснять что они делают. 
Индефикатор запроса заносим в переменную $sql. */

    $sql = $db->query("SELECT comments.post_id, comments.text, comments.autor, post.id, post.flag,
    post.category, post.date as newsdate, post.title, post.alt_name 
    FROM " . PREFIX . "_comments as comments, " . PREFIX . "_post as post 
    WHERE post.id=comments.post_id 
    ORDER BY comments.date DESC LIMIT 0,20");


/* С помощью функции get_row() класса $db считываем последовательно каждую строку из результатов выборки. 
Информация заносится в массив $row с индексами равными именам полей таблиц */
 
    while ($row = $db->get_row($sql))
    {


/* Если нужно обрезаем заголовок новости */

        if (strlen($row['title']) > 50) {
     			$title = substr($row['title'], 0, 50)."...";
        } else {
     			$title = $row['title'];
        }



/* Формируем ссылку на профиль пользователя. Аналогично */

        $aname=urlencode($row['autor']);
        $name= "<a href=\"".$config['http_home_url']."user/".$aname."/\">". $row['autor'] .'</a>';


/* Формируем текст комментария и если надо обрезаем его */

        $text = htmlspecialchars($row['text']);
        if (strlen($text) > 1024)  $text= substr($text, 0, 1024)."...";


/* Формируем ссылку на новость. Массив $config содержит все настройки системы. 
В частности $config['http_home_url']  - это урл домена. */

        $newslink = $config['http_home_url'].$row['post_id']."-".$row['alt_name'].".html";
        $hint = "onMouseover=\"showhint('$text', this, event, '');\"";
        $title = "<a title=\"".$text."\" href=\"".$newslink."\">".stripslashes($title)."</a>";


/* Итоговая запись для одного комментария */

        $lastcomm.="От $name в новости: <br /> $title <br /><br />";
    }

        $db->free();


/* Кэшируем полученные данные. Чтобы получше разобраться с функциями кэширования, 
откройте файл 'engine/api/api.class.php' там отлично все закомментировано */

    $dle_api->save_to_cache ( "lastcomm", $lastcomm);
} 


/* Выводим полученный результат */

    echo $lastcomm;
    
    ?>
