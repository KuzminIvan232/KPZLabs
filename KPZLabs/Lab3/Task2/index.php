<?php
require_once __DIR__ . '/src/Warrior.php';
require_once __DIR__ . '/src/Mage.php';
require_once __DIR__ . '/src/Palladin.php';
require_once __DIR__ . '/src/Armor.php';
require_once __DIR__ . '/src/Weapon.php';
require_once __DIR__ . '/src/Artifact.php';

echo "=== RPG Game: Heroes with Inventory ===<br>";

$hero1 = new Warrior();
$hero1 = new Armor($hero1);
$hero1 = new Weapon($hero1);
$hero1 = new Artifact($hero1);

echo $hero1->getName() . " | Power: " . $hero1->getPower() . "<br>";

$hero2 = new Mage();
$hero2 = new Weapon($hero2);
$hero2 = new Armor($hero2);

echo $hero2->getName() . " | Power: " . $hero2->getPower() . "<br>";

$hero3 = new Palladin();
$hero3 = new Artifact($hero3);

echo $hero3->getName() . " | Power: " . $hero3->getPower() . "<br>";
