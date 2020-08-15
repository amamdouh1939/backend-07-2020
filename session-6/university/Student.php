<?php

require_once('./Person.php');

class Student extends Person {
    private $grade;

    public function __construct($name, $email, $grade) {
        parent::__construct($name, $email);
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

    public function goUp() {
        echo "I use the stairs to go up";
    }

    
}