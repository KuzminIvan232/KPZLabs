<?php
require_once __DIR__ . '/src/SmartTextReader.php';
require_once __DIR__ . '/src/SmartTextChecker.php';
require_once __DIR__ . '/src/SmartTextReaderLocker.php';

echo "=== SmartTextReader Proxy Example ===<br>";

file_put_contents("example1.txt", "Hello world!\nThis is example 1.");
file_put_contents("example2.txt", "Another file\nWith two lines.");

$reader1 = new SmartTextReader("example1.txt");
$data1 = $reader1->read();
echo "Direct read result:<br>";
print_r($data1);
echo "<br><br>";

$checker = new SmartTextChecker(new SmartTextReader("example1.txt"));
$data2 = $checker->read();
echo "<br>";

$lockedReader = new SmartTextReaderLocker(new SmartTextReader("example2.txt"), "/example2/");
$lockedReader->read();

$allowedReader = new SmartTextReaderLocker(new SmartTextReader("example1.txt"), "/example2/");
$data3 = $allowedReader->read();
