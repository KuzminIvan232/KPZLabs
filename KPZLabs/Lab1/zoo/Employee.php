<?php

namespace zoo;

class Employee
{
    public $name, $position;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }
}