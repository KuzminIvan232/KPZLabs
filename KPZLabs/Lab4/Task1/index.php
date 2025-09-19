<?php
require_once __DIR__ . '/handlers/Level1Support.php';
require_once __DIR__ . '/handlers/Level2Support.php';
require_once __DIR__ . '/handlers/Level3Support.php';
require_once __DIR__ . '/handlers/Level4Support.php';

$level1 = new Level1Support();
$level2 = new Level2Support();
$level3 = new Level3Support();
$level4 = new Level4Support();

$level1->setNext($level2)->setNext($level3)->setNext($level4);

$choice = isset($_GET['choice']) ? intval($_GET['choice']) : 0;

echo "<h2>User Support Menu</h2>";
echo "<ul>
<li><a href='?choice=1'>1. Basic info</a></li>
<li><a href='?choice=2'>2. Technical issues</a></li>
<li><a href='?choice=3'>3. Advanced troubleshooting</a></li>
<li><a href='?choice=4'>4. Specialist support</a></li>
</ul>";

if ($choice > 0) {
    $result = $level1->handle($choice);
    echo "<p><strong>Result:</strong> " . ($result ?? "Invalid choice") . "</p>";
}
