<?php

require_once "zoo/Inventory.php";
require_once "zoo/Enclosure.php";
require_once "zoo/Food.php";
require_once "zoo/Employee.php";
require_once "zoo/Animal.php";
require_once "animals/Lion.php";
require_once "animals/Elephant.php";

$zoo = new \zoo\Inventory();

$lion1 = new \animals\Lion("Simba", 5);
$elephant1 = new \animals\Elephant("Dambo", 10);

$enclosure1 = new zoo\Enclosure("Savannah", "Large");
$enclosure1->addAnimal($lion1);
$enclosure1->addAnimal($elephant1);
$zoo->addEnclosure($enclosure1);

$zoo->addEmployee(new zoo\Employee("Ivan", "Medic"));
$zoo->addEmployee(new zoo\Employee("Olena", "Spectator"));

$zoo->addFood(new zoo\Food("Meat", 50));
$zoo->addFood(new zoo\Food("Fruits", 30));

$zoo->report();