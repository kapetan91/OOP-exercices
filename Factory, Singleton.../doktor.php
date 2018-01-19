<?php

class Person {
	private $firstName;
	private $lastName;

	public function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}
}

class Doctor extends Person {
	private $hospital;

	public function __construct($firstName, $lastName, $hospital) {
		parent::__construct($firstName, $lastName);
		$this->hospital = $hospital;
	}

	public function getHospital() {
		return $this->hospital;
	}
}

$doctor = new Doctor("Marko", "Markovic", "Urgentni");

echo $doctor->getFirstName();