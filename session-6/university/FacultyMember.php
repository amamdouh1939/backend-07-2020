<?php

require_once('./Person.php');

class FacultyMember extends Person {
    private $subject;

    public function __construct($name, $email, $subject) {
        parent::__construct($name, $email);
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function goUp() {
        echo "I use the elevator to go up";
    }

    public function __call($name, $args) {
        if ($name == 'talk') {
            $numberOfArguments = count($args);
            switch($numberOfArguments) {
                case 0:
                    echo "There are no parameters";
                    break;
                case 2:
                    echo "The parameters are $args[0] and $args[1]";
                    break;
                default:
                break;
                    
            }
        }
    }
}