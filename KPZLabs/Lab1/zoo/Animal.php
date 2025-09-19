<?php

namespace zoo;

class Animal
{
    public $name, $species, $age;

    public function __construct($name, $species, $age)
    {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
    }
}