<?php

# Задание 2
# Шаг 2. Удалите куку с именем test

if (isset($_COOKIE['test'])) { setcookie("test", ''); }
if ( ! isset($_COOKIE['test'])) { echo "Cookies are unset"; }
?>
