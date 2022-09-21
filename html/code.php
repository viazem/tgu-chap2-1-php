<?php

    $_br = '<br>'; echo $_br;

    $a = 2 * 2 + 3; echo $a; echo $_br;// 7

    $a = 5 + 5 * 3; echo $a; echo $_br;// 20

    //Равный приоритет<br

    $a = 8 / 2 * 4; echo $a.'<br>'; //16
    $a = 8 * 2 / 4; echo $a.'<br>'; // 16 / 4 = 4
    $a = 16 / 2 / 2 / 2; echo $a.'<br>'; // 2
    
    $a = 8 / 2 * 2;
    echo $a;
    
    $a = 8 * 4 / 2 / 2;
    echo $a;
    
    //Группирующие скобки
    
    $a = 2 * (2 + 3);
    echo $a; // выведет 10 (результат 2 * 5)
    
    $a = (2 + 3) * (2 + 3);
    echo $a;
    
    //Дроби в PHP
    
    $a = 0.5;
    echo $a; // выведет 0.5
    
    //Отрицательные числа в PHP
    
    $a = -1;
    echo $a; // выведет -1
    
    //Остаток от деления в PHP
    
    echo 10 % 3; // выведет 1
    
    $a = 10;
    $b = 3;
    echo $a % $b; // выведет 1
    
    //Возведение в степень в PHP
    
    $a = 10;
    $b = 3;
    echo $a ** $b; // выведет 1000
    
    
    //Приоритет возведения в степень
    
    $a = 3 * 2 ** 3;
    echo $a . '<br>'; // 24
    
    $a = (3 * 2) ** 3;
    echo $a . '<br>'; // 6^3
    
    //Строки в PHP
    
    $str = 'abc';
    echo $str . '<br>'; // выведет 'abc'
    
    $str = 'abc' . 'def' . '<br>'; // складываем две строки
    echo $str;            // выведет 'abcdef'
    
    //Пробелы при сложении строк
    
    $str = 'abc';
    echo $str . ' def' . '<br>'; // выведет 'abc def'
    
    
    //Длина строки<br>Проблема с кириллицей
    
    $str = 'abcde';
    echo strlen($str) . '<br>'; // выведет 5
    
    echo strlen('абвгд') . '<br>'; // выведет 10, а не 5
    
    echo mb_strlen('абвгд') . '<br>'; // выведет 5
    
    
    //Работа с HTML тегами в PHP
    
    echo '<b>жирный</b>';
    
    echo '<b>';
    echo 'жирный';
    echo '</b>';
    
    $str = 'жирный';
    echo '<b>' . $str . '</b>';
    
    echo '<a href="index.php">ссылка</a>';
    
    
    //Логические значения в PHP
    
    $isAdult = true;
    var_dump($isAdult); // выведет true
    
    echo true;  // выведет 1
    echo false; // выведет пустоту
    
    
    // Значение null в PHP
    
    // В PHP существует еще одно специальное значение null, которое обозначает "ничего".
    
    
    var_dump($test);
    
    $test = null;
    
    var_dump($test);
    
    echo $test;
    
    //Автоматическое преобразование типов в PHP

    echo '<br>';
    
    echo '1' + '2'; // выведет 3
    
    
    echo '1' + 2;
    
    // Преобразование к строке
    
    echo 1 . 2 . '<br>';    // выведет '12'
    
    echo 1.2 . '<br>';     // выведет 1.2
    
    // echo 1. 2;    // выдаст ошибку
    
    $a = '1';
    $b = '2';
    
    echo $a.$b . '<br>';   // выведет 12, а не ошибку
    
    //Принудительное преобразование типов в PHP
    
    
    $test = '1';
    var_dump($test);
    echo '<br>';
    $test = (int) '1';
    var_dump($test); // выведет 1 - число
    echo '<br>';
    var_dump((int) '1');
    echo '<br>';    
    
    // Дробные числа
    
    $test = '1.2';
    var_dump($test);
    echo '<br>';    
    
    $test = (float) '1.2';
    var_dump($test); // выведет 1.2
    echo '<br>';    
    
    //Преобразование дроби к целому числу
    
    $test = (int) '1.2';
    var_dump($test); // выведет 1
    echo '<br>';    
    $test = (int) 1.2;
    var_dump($test); // выведет 1
    echo '<br>';    
    
    //Преобразование к строке
    
    $test = (string) 123;
    var_dump($test); // выведет '123'
    echo '<br>';        
    $test = (string) 1.2;
    var_dump($test); // выведет '1.2'
    echo '<br>';
    //Получение символов строки на PHP
    $str = 'abcde';
    echo $str[0]; // выведет 'a'
    echo '<br>';    
    $str[0] = '+';
    echo $str; // выведет '+bcde'
    echo '<br>';    
    //Последний символ строки
    $str = 'abcde';
    $last = strlen($str) - 1; // номер последнего символа
    echo $str[$last];
    echo '<br>';    
    //Цифры в строке
    
    $str = '12345';
    
    echo $str[0]; // выведет '1'
    echo $str[1]; // выведет '2'
    echo $str[2]; // выведет '3'
    echo '<br>';    

    // Числа
    
    $num = 12345;
    $str = (string) $num;
    
    echo $str[0]; // выведет '1'
    
    echo '<br>';    
    //Сокращенные операции в PHP
    $num = 1;
    $num = $num + 1; echo $num;
    $num  = 1;$num += 3;echo $num; // эквивалентно $num = $num + 3;
    $num  = 1;$num -= 3;echo $num;
    $num  = 1;$num *= 3;echo $num;
    $num  = 1;$num /= 3;echo $num;
    $num  = 'a';$num .= 'b';echo $num;
    echo '<br>';
    //Операции инкремента и декремента в PHP
    echo '<br>';    
    $num  = 1;++$num;echo $num;
    $num  = 1;$num++;echo $num;
    $num  = 1;--$num;echo $num;
    $num  = 1;$num--;echo $num;
    echo '<br>';

    //Префиксный и постфиксный тип
    echo '<hr>';
    $num  = 1;echo ++$num;echo $num . '<br>';  // 2 2
    $num  = 1;echo $num++;echo $num . '<br>';  // 1 2
    $num  = 1;echo --$num;echo $num . '<br>';  // 0 0
    $num  = 1;echo $num--;echo $num . '<br>';  // 1 0

    echo '<hr>';
    
    // Практика на операции в PHP
    
    $min = 60; // секунды
    $hor = 60; // минуты
    $day = 24; // часы
    
    echo 'Найдите количество секунд в сутках.' . ( $min * $hor * $day ) . '<br>';
    echo 'Найдите количество секунд в 30 сутках.' . ( $min * $hor * $day * 30 ) . '<br>';
    echo 'Найдите количество байт в мегабайте.' . ( 1 * 1024 ) . '<br>';
    echo 'Найдите количество байт в гигабайте.' . ( 1 * 1024 * 1024 ) . '<br>';
    
    echo '<hr>';
    
    // Пусть дана переменная r с радиусом круга. По соответствующей формуле найдите площадь круга и запишите ее в переменную s. Выведите содержимое этой переменной на экран.
    $r = 10;
    $pi = 3.14;
    $s = $pi * $r ** 2;
    echo $s;
    
    
?>
