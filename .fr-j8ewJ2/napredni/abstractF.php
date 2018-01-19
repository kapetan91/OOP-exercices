<?php
abstract class VehicleFactory {
  	private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function makeVehicle(): Vehicle
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
interface Vehicle {
	public function drive();
}
class Car extends VehicleFactory implements Vehicle {
	public function drive(){
		echo "Driving car... <br>";
	}
}

class Truck extends VehicleFactory implements Vehicle {
	public function drive(){
		echo "Driving truck... <br>";
	}
}

// interface VehicleFactory{
// 	public function makeVehicle(): Vehicle;
// }

class CarFactory {
	public function makeVehicle($make, $model): Vehicle {
		return new Car($make, $model);
	}
}
class TruckFactory {
	public function makeVehicle($make, $model): Vehicle {
		return new Truck($make, $model);
	}
}

$carFactory = new CarFactory();
$truckFactory = new TruckFactory();

$vehicles[] = $carFactory->makeVehicle('Mercedes', 'e320');
$vehicles[] = $carFactory->makeVehicle('Mercedes', 'e220');
$vehicles[] = $carFactory->makeVehicle('Mercedes', 'c320');
$vehicles[] = $truckFactory->makeVehicle('Mercedes', 'd320');
$vehicles[] = $truckFactory->makeVehicle('Mercedes', 'd320');

foreach ($vehicles as $vehicle){
	$vehicle -> drive();
}

var_dump($vehicles);


