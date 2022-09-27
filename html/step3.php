<?php

#Шаг 3. Сделайте счетчик посещения сайта посетителем.
#Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'

$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, time() + 86400);
$_COOKIE['counter'] = $counter;
if (isset($_COOKIE['counter'])) { echo 'Вы посетили наш сайт ' . $_COOKIE['counter'] . ' раз!'; }
?>