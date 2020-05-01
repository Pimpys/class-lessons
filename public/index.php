<pre>
<?php
require '../vendor/autoload.php';

use App\Matthew\Armor;
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
    echo $view->getName();
//    var_dump($array);
}catch (Throwable $exception){
    echo $exception->getMessage();
}