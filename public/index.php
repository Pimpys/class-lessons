<pre>
<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
use App\Matthew\Armor;
use App\Matthew\ArrayController;
use App\Matthew\User\Hp;
use App\Max\User;
use App\View;


try {
//    $array = [
//        $matthew = new User(),
//        $class = new User(),
//        $weapon = new App\Matthew\Weapon(),
//        $armor = new Armor(),
//        $hp = new HP()
//    ];
    $view = new View();
    $view->setName('null');
//    echo $view->getName();
//    var_dump($array);
//    echo Вывести дату в произвольном формате, с надписью: Сегодня "" года
    $printer = new ArrayController(require 'include/array.php');
    $printer->printArray();
    echo $printer;
}catch (Throwable $exception){
    echo $exception->getMessage();
}