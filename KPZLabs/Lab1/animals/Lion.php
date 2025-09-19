<?php

namespace animals;

class Lion extends \zoo\Animal
{
    public function __construct($name, $age)
    {
        parent::__construct($name, "Lion", $age);
    }
}