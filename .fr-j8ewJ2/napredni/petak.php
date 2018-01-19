<?php 

abstract class Person {
    private $firstName;
    private $lastName;

    public function __construct(
        string $firstName, 
        string $lastName
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function changeName($newName) {
        $this->firstName = $newName;
    }
}

class Student extends Person {
    private $numberIndex;
    private $faculty;

    public function __construct(
        string $firstName,
        $lastName,
        int $numberIndex,
        string $faculty 
    ) {
        parent::__construct($firstName, $lastName);
        $this->numberIndex = $numberIndex;
        $this->faculty = $faculty;
    }

    
}

$student = new Student(
    1234, 
    'Markovic', 
    "12345", 
    'PMF'
);

class SS {
    private $students; 

    public function addStudent(Person $person){
        $this->students[] = $person;
    }
}

$ss = new SS();
$ss->addStudent($student);
var_dump($ss);
