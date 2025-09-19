<?php

namespace zoo;

class Enclosure
{
    public $type, $size;
    public $animals = [];

    public function __construct($type, $size)
    {
        $this->type = $type;
        $this->size = $size;
    }

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }
}