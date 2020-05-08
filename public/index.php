<pre>
<?php
date_default_timezone_set('Europe/Kiev');
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
use App\Matthew\ArrayController;


try {
//    $printer = new ArrayController(require 'include/array.php');
//    $printer->printArray();
//    echo $printer;

    //Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23
    $hour = (int) strftime('%H');
    $welcome = ''; // Инициализируем переменную для приветствия

/** Используя управляющую конструкцию if – elseif – else присвойте
переменной $welcome значение, изходя из следующих условий
если число в переменной $hour попадает в диапазон:
• от 0 до 6 - Доброй ночи
• от 6 (включительно) до 12 - Доброе утро
• от 12 (включительно) до 18 - Добрый день
• от 18 (включительно) до 23 - Добрый вечер
• Если число в переменной $hour не попадает ни в один из
вышеперечисленных диапазонов, то присвойте переменной
$welcome значение Доброй ночи
**/

    echo "<h1>$welcome, Гость!</h1>";
}catch (Throwable $exception){
    echo $exception->getMessage();
}