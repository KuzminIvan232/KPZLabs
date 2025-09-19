<?php

require_once 'Virus.php';

$rootVirus = new Virus(10.5, 5, "RootVirus", "Alpha");

$child1 = new Virus(5.2, 3, "ChildVirus1", "Beta");
$child2 = new Virus(4.8, 2, "ChildVirus2", "Gamma");

$grandChild1 = new Virus(2.1, 1, "GrandChildVirus1", "Delta");
$grandChild2 = new Virus(1.9, 1, "GrandChildVirus2", "Epsilon");

$child1->addChild($grandChild1);
$child2->addChild($grandChild2);

$rootVirus->addChild($child1);
$rootVirus->addChild($child2);

echo "Original virus family:\n";
$rootVirus->print();

$clonedVirus = clone $rootVirus;

echo "\nCloned virus family:\n";
$clonedVirus->print();
