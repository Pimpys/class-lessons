<pre>
<?php

class Car
{
    protected $wheels;

    public $doors;

    private $engine;

    public function setMotor($engine)
    {
        $this->engine = $engine;
    }
}

class BMW extends Car
{
}

$car = new BMW();
$car->setMotor('motor');
var_dump($car);
