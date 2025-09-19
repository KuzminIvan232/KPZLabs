<?php

require_once __DIR__ . '/Models/TextDocument.php';
require_once __DIR__ . '/Models/DocumentMemento.php';
require_once __DIR__ . '/Models/TextEditor.php';
require_once __DIR__ . '/Services/History.php';

use Models\TextDocument;
use Models\TextEditor;
use Services\History;

$document = new TextDocument();
$editor = new TextEditor($document);
$history = new History();

$editor->write("Hello");
$history->push($editor->save());

$editor->write(" World");
$history->push($editor->save());

$editor->write("!!!");

echo "Current: " . $editor->getContent() . "<br>";

$editor->restore($history->pop());
echo "Undo 1: " . $editor->getContent() . "<br>";

$editor->restore($history->pop());
echo "Undo 2: " . $editor->getContent() . "<br>";
