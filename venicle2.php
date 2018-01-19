<?php
abstract class Vehicle {
    protected $numberOfWheels;
    protected $horsepower;

    public abstract function startEngine();

    public function getHorsepower() {
        return $this->horsepower;
    }

    public function __construct($numberOfWheels, $horsepower){
        $this->numberOfWheels=$numberOfWheels;
        $this->horsepower=$horsepower;
    }
}

class Car extends Vehicle {
    public function startEngine() {
        return 'Vrooooom!';
    }

    
}

class FormulaOneCar extends Vehicle {
    public function startEngine() {
        return "vroooooooom";
   }
}

$someCar = new Car(4, 120);
$someFormulaOneCar = new FormulaOneCar(4, 1200);

echo 'Car: ' . $someCar->startEngine();
echo 'Formula One Car: ' . $someFormulaOneCar->startEngine();
