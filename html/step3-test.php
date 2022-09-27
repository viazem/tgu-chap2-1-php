<?php

    echo '<br>Шаг 3. Сделайте счетчик посещения сайта посетителем.<br> Каждый раз, заходя на сайт, он должен видеть надпись: \'Вы посетили наш сайт % раз!\' <br><br>';


    if (isset($_COOKIE['count_visit'])) {
	echo '<br>count_visit = ' . $_COOKIE['count_visit'] . '<br>';
    }

    if (!isset($_COOKIE['count_visit'])) { /* Начало отсчёта посещений */
	setcookie('count_visit', 1, time() + 60*60*24*365);
	$_COOKIE['count_visit'] = 1;
    } else { /* Продолжаем считать */
	$count = $_COOKIE['count_visit'] + 1;
	setcookie('count_visit', $count, time() + 60*60*24*365);
	$_COOKIE['count_visit'] = $count;
	unset($count);
    }
    
    if (isset($_COOKIE['count_visit'])) {
	echo 'Вы посетили наш сайт ' . $_COOKIE['count_visit'] . '% раз!';
    }

    if (isset($_COOKIE['count_visit']) && $_COOKIE['count_visit'] > 5) {
	setcookie('count_visit', '', time()); // удаляем куки
	unset($_COOKIE['count_visit']); // удаляем значение массива
    }

?>