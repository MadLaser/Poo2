<?php
require 'index.php';
$bicycle = new Bicycle('red', 2);

$car = new Car('red', 4, 'Fuel');
echo $car->start() . "<br>";
echo $car->getIsEngineOn() . "<br>";
echo $car->forward() . '<br>';
echo $car->getCurrentSpeed() . '<br>';
$car->setCurrentSpeed('30');
echo $car->getCurrentSpeed() . '<br>';
echo $car->brake() . '<br>';
echo $car-> getCurrentSpeed() . '<br>';

$car2 = new Car('blue', 1, 'Electric');
echo $car2->start() . "<br>";
echo $car2->getIsEngineOn() . "<br>";
echo $car2->forward() . '<br>';
echo $car2->getCurrentSpeed() . '<br>';
$car2->setCurrentSpeed('30');
echo $car2->getCurrentSpeed() . '<br>';

$camion = new Camion('blue', 3, 'Fuel', 2000);
echo $camion->isFilling() . '<br>';
$camion->setCharge(2000);
echo $camion->isFilling() . '<br>';

var_dump($car);
var_dump($car2);
var_dump($bicycle);
var_dump(Car::ALLOWED_ENERGIES);
var_dump($camion);
