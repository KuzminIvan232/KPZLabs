<?php

namespace zoo;

class Food
{
    public $name, $quantity; // quantity in kg

    public function __construct($name, $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }
}