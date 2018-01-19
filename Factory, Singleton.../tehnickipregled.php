<?php 
interface Vehicle {
	public function inspect();
}

class Car implements Vehicle  {
	public function inspect(){
		echo "tehnicki pregled je izvrsen...";
	}
}

class Bike implements Vehicle {
	public function inspect(){
		echo "tehnicki pregled je izvrsen...";

	}
}

class InspectionService {
	private static $instance;

	static function getInspect(){
		if (self::$instance == NULL) {
			self::$instance = new InspectionService();
		}
		return $instance;
	}
}


InspectionService::getInspect();