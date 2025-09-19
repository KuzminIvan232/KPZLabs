<?php

namespace zoo;

class Inventory
{
    public $enclosures = [];
    public $employees = [];
    public $food = [];

    public function addEnclosure(Enclosure $enclosure)
    {
        $this->enclosures[] = $enclosure;
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function addFood(Food $food)
    {
        $this->food[] = $food;
    }

    public function report()
    {
        echo "Animals: <br>";
        foreach ($this->enclosures as $enclosure) {
            foreach ($enclosure->animals as $animal) {
                echo "{$animal->species} - {$animal->name}, {$animal->age} years <br>";
            }
        }

        echo "Employee: <br>";
        foreach ($this->employees as $e) {
            echo "{$e->name} - {$e->position} <br>";
        }

        echo "Food: <br>";
        foreach ($this->food as $f) {
            echo "{$f->name}: {$f->quantity} kg <br>";
        }
    }
}