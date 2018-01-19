<?php
class Venicle {
	public $numberOfWheels;
	public $color;
	public $isEngineStarted = false;

	public function startEngine(){
		$this->isEngineStarted = true;
		echo "Engine started: " . $this->isEngineStarted;
	}

	public function __construct ($numberOfWheels, $color){

		$this->numberOfWheels=$numberOfWheels;
		$this->color=$color;
		$this->isEngineStarted=false;
	}
}

$truck = new Venicle(16, "Black");
$truck->numberOfWheels = 16;
$truck->color = "Black";

$truck->startEngine();

?>