<?php

class Person {
    private $name;
    private $email;
    private static $type;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function goUp() {
        echo "I am going up";
    }

    public static function getType() {
        return self::$type;
    }

    public static function setType($type) {
        self::$type = $type;
    }

    // public function talk() {
    //     echo "Hello";
    // }

    // public function talk($thingILike) {
    //     echo "Hello I like $thingILike";
    // }

    // public function talk($thingILike, $thingIDontLike) {
    //     echo "Hello I like $thingILike, and I don't like $thingIDontLike";
    // }

    public function __call($name, $args) {
        if ($name == 'talk') {
            switch(count($args)){
                case 0:
                    echo "Hello";
                    break;
                case 1:
                    echo "Hello I like $args[0]";
                    break;
                case 2:
                    echo "Hello I like $args[0], and I don't like $args[1]";
                    break;
                default:
                    echo "Hello";
            }
        }
    }
}
