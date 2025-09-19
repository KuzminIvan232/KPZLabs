<?php
require_once __DIR__ . '/src/VectorRenderer.php';
require_once __DIR__ . '/src/RasterRenderer.php';
require_once __DIR__ . '/src/Circle.php';
require_once __DIR__ . '/src/Square.php';
require_once __DIR__ . '/src/Triangle.php';

echo "=== Bridge Pattern Example ===<br>";

$vectorRenderer = new VectorRenderer();
$rasterRenderer = new RasterRenderer();

$circleVector = new Circle($vectorRenderer);
$circleRaster = new Circle($rasterRenderer);

$squareVector = new Square($vectorRenderer);
$squareRaster = new Square($rasterRenderer);

$triangleVector = new Triangle($vectorRenderer);
$triangleRaster = new Triangle($rasterRenderer);

$circleVector->draw();
$circleRaster->draw();

$squareVector->draw();
$squareRaster->draw();

$triangleVector->draw();
$triangleRaster->draw();
