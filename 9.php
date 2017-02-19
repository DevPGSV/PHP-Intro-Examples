<?php

class Human {
    private $name;
    private $years;

    function __construct($name, $years) {
        $this->name = $name;
        $this->years = $years;
    }

    function getName() {
        return $this->name;
    }

    function setYears($years) {
        $this->years = $years;
    }
}



$o = new Human("Eustaquio", 777);

echo $o->getName()."\n";

