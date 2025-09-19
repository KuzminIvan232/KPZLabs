<?php

require_once __DIR__ . '/Shape.php';

class Circle extends Shape {
    public function draw() {
        $this->renderer->render("Circle");
    }
}