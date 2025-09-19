<?php

require_once __DIR__ . '/Shape.php';

class Triangle extends Shape {
    public function draw() {
        $this->renderer->render("Triangle");
    }
}