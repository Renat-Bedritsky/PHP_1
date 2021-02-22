<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    // Задание 1

    echo 'Задание 1. Вывести результаты выражений<br><br>';

    $a = 10;
    $b = 2;
    
    echo $a . ' + ' . $b . ' = ' . $a + $b . '<br>';
    echo $a . ' - ' . $b . ' = ' . $a - $b . '<br>';
    echo $a . ' * ' . $b . ' = ' . $a * $b . '<br>';
    echo $a . ' / ' . $b . ' = ' . $a / $b . '<br>';

    echo '<hr>';

    // Задание 2

    echo 'Задание 2. Найти (x+1)4−2(z−2x^2+y^2)<br><br>';

    $x = 2;
    $y = 6;
    $z = 9;

    echo '(x+1)4−2(z−2x^2+y^2) = '. ($x + 1) * 4 - 2 * ($z - 2 * ($x ** 2) + $y ** 2);

    echo '<hr>';

    // Задание 3

    echo 'Задание 3. Вывести результат<br><br>';

    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;

    echo 'Результат: ' . $result;

    echo '<hr>';

    // Задание 4

    echo 'Задание 4. Сложить слова и вывести<br><br>';

    $text1 = 'Привет';
    $text2 = 'Мир!';

    echo $text1 . ', ' . $text2;

    echo '<hr>';

    // Задание 5

    echo 'Задание 5. Вывести Имя<br><br>';

    $name = 'John';

    echo 'Привет, ' . $name . '!';

    echo '<hr>';

    // Задание 6

    echo 'Задание 6. Найти сумму цифр числа 12345<br><br>';

    $num = '12345';

    echo 'Результат: ' . $num[0] + $num[1] + $num[2] + $num[3] + $num[4];

    echo '<hr>';

    // Задание 7

    echo 'Задание 7. Скрипт считающий секунды<br><br>';

    $seconds = 60;
    $minutes = 60;
    $hours = 24;
    $days = 30;
    $months = 12;
    $years = 21;
    
    echo '1 час = ' . $seconds * $minutes . ' секунд.<br>';
    echo '1 сутки = ' . $seconds * $minutes * $hours . ' секунд.<br>';
    echo '1 месяц = ' . $seconds * $minutes * $hours * $days . ' секунд.<br>';
    echo '1 год = ' . $seconds * $minutes * $hours * $days * $months . ' секунд.<br>';
    echo 'С 2000 года прошло ' . $seconds * $minutes * $hours * $days * $months * $years . ' секунд.<br>';

    echo '<hr>';

    // Задание 8

    echo 'Задание 8. Время в формате час:минута:секунда<br><br>';

    $hour = 20;
    $minute = 50;
    $second = 34;

    echo "Сейчас: {$hour}:{$minute}:{$second}";

    echo '<hr>';

    // Задание 9

    echo 'Задание 9. Переписать код<br><br>';

    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;

    echo 'Результат: ' . $var;

    echo '<hr>';

    // 10

    echo 'Задание 10. Работа с константой<br><br>';

    define('CONST_NAME', 'Jonah');
    $name = 'John';
    $surname = 'Jameson';
    $age = 57;

    echo 'Наличие константы: ';
    var_dump(defined('CONST_NAME'));
    echo '<br><br>';

    echo 'Меня зовут ' . CONST_NAME . ' ' . $name[0] . '.' . $surname[0] . '.<br>';
    echo 'Мне ' . $age . ' лет.';

    ?>

</body>
</html>