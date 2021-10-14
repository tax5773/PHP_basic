/*
5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

Я не нашел шаблон поэтому реализовал как прошлом дз
*/

<?php
$title = 'Title';
$date = date('Y-d-m');
?>
<html>
<head>
    <title><?php echo $title;?></title>
</head>
<footer>
    <span><?php echo $date;?></span>
</footer>
</html>