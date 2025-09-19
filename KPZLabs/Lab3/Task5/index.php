<?php
require_once __DIR__ . '/src/LightTextNode.php';
require_once __DIR__ . '/src/LightElementNode.php';

echo "=== LightHTML Example ===<br>";

$ul = new LightElementNode('ul', 'block', false, ['my-list']);

$li1 = new LightElementNode('li', 'block', false);
$li1->addChild(new LightTextNode("Перший елемент"));

$li2 = new LightElementNode('li', 'block', false);
$li2->addChild(new LightTextNode("Другий елемент"));

$li3 = new LightElementNode('li', 'block', false);
$li3->addChild(new LightTextNode("Третій елемент"));

$ul->addChild($li1);
$ul->addChild($li2);
$ul->addChild($li3);

echo "OuterHTML:<br>";
echo $ul->outerHTML() . "<br><br>";

echo "InnerHTML:<br>";
echo $ul->innerHTML() . "<br><br>";

echo "Кількість дочірніх елементів ul: " . $ul->childCount() . "<br>";
