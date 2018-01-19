<?php 

interface Convertible {
	public function openRoof();
	public function closeRoof();
}

class Car implements Convertible {
	private $isRoofOpened;

	public function openRoof(){
		echo "Opening roof...";
		$this->isRoofOpened = true;
	}

	public function closeRoof(){

	echo "Clossing roof...";
	$this->isRoofOpened = false;
	}
}

$car = new Car();

$car->openRoof();
$car->closeRoof();

var_dump($car instanceof Car);
var_dump($car instanceof Convertible);