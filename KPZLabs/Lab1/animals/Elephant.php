<?php

namespace animals;

class Elephant extends \zoo\Animal
{
    public function __construct($name, $age)
    {
        parent::__construct($name, "Elephant", $age);
    }
}