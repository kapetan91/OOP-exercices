<?php
class Car {
    public function drive() {
        echo 'Driving car...<br>';
    }
}

class CarFactory {
    public function makeCar() {
        return new Car();
    }
}

$factory = new CarFactory();
$car = $factory->makeCar();
$car->drive();