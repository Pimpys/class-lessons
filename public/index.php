<pre>
<?php

use Matthew\Armor;
use Matthew\User\Hp;
use Max\User;

spl_autoload_register(function ($class){
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($path)){
        require $path;
    }else{
        throw new \RuntimeException(sprintf('This %s file no found!', $path));
    }
});

try {
    $array = [
        $matthew = new User(),
        $class = new User(),
        $weapon = new \Matthew\Weapon(),
        $armor = new Armor(),
        $hp = new HP()
    ];
    var_dump($array);
}catch (Exception $exception){
    echo $exception->getMessage();
}