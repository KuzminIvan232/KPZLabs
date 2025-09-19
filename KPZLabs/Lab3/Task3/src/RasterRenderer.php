<?php

require_once __DIR__ . '/Renderer.php';

class RasterRenderer implements Renderer {
    public function render($shapeName) {
        echo "Drawing $shapeName as pixels<br>";
    }
}