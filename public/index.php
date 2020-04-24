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
    $array = new View();

//    var_dump($array);
}catch (Exception $exception){
    echo $exception->getMessage();
}