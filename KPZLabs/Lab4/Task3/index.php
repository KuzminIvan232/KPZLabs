<?php

require_once __DIR__ . '/LightHTML/Element.php';
require_once __DIR__ . '/LightHTML/EventListener.php';
require_once __DIR__ . '/LightHTML/Document.php';

use LightHTML\Element;
use LightHTML\EventListener;
use LightHTML\Document;

class ClickListener implements EventListener {
    public function handle(Element $element): void {
        echo "Clicked on element!<br>";
    }
}

class MouseOverListener implements EventListener {
    public function handle(Element $element): void {
        echo "Mouse over element!<br>";
    }
}

$button = new Element("button");
$button->setAttribute("id", "btn1")
    ->setAttribute("class", "btn")
    ->addEventListener("click", new ClickListener())
    ->addEventListener("mouseover", new MouseOverListener());

$doc = new Document();
$doc->addElement($button);

echo "HTML Output:<br>";
echo $doc->render();

echo "<br>Event Simulation:<br>";
$button->triggerEvent("click");
$button->triggerEvent("mouseover");
