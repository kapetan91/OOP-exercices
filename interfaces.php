<?php
interface Paintable {
public function setColor($color);
public function getColor();
}


class Car implements Paintable {
private $color;


public function setColor($color) {
		$this->color = $color;
}

public function getColor() {
	return $this->color;
}
}

class Wall implements Paintable {
public $wallColor;


public function setColor($color) {
	$this->wallColor = $color;
}

public function getColor() {
	return $this->wallColor;
}
}

$car = new Car();
$car->setColor("red");

echo $car->getColor();
