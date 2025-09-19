<?php


require_once __DIR__ . '/Renderer.php';

class VectorRenderer implements Renderer
{
    public function render($shapeName)
    {
        echo "Drawing $shapeName as vector graphics<br>";
    }
}