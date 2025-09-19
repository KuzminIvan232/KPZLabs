<?php
require_once __DIR__ . '/src/LightTextNode.php';
require_once __DIR__ . '/src/LightElementNode.php';
require_once __DIR__ . '/src/LightFlyweightFactory.php';

echo "=== LightHTML Book Renderer ===<br>";

$bookText = <<<EOT
Act V
Scene I. Mantua. A Street.
Scene II. Friar Lawrence's Cell.
 Scene III. A churchyard; in it a Monument belonging to the Capulets

Dramatis Personæ

ESCALUS, Prince of Verona.
MERCUTIO, kinsman to the Prince, and friend to Romeo.
PARIS, a young Nobleman, kinsman to the Prince.
Page to Paris.
EOT;

$lines = explode("\n", $bookText);

$root = new LightElementNode('div', 'block', false, ['book']);

foreach ($lines as $i => $line) {
    $line = rtrim($line);
    $node = null;

    if ($i === 0) {
        $tag = LightFlyweightFactory::getTag('h1');
        $node = new LightElementNode($tag, 'block');
    } elseif (strlen($line) < 20) {
        $tag = LightFlyweightFactory::getTag('h2');
        $node = new LightElementNode($tag, 'block');
    } elseif (preg_match('/^\s/', $line)) {
        $tag = LightFlyweightFactory::getTag('blockquote');
        $node = new LightElementNode($tag, 'block');
    } else {
        $tag = LightFlyweightFactory::getTag('p');
        $node = new LightElementNode($tag, 'block');
    }

    $node->addChild(new LightTextNode(trim($line)));
    $root->addChild($node);
}

echo $root->outerHTML() . "<br><br>";

echo "Total children in root: " . $root->childCount() . "<br>";

echo "Memory usage: " . memory_get_usage() . " bytes<br>";
