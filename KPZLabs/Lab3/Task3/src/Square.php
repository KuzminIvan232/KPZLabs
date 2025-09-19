<?php

require_once __DIR__ . '/Shape.php';

class Square extends Shape {
    public function draw() {
        $this->renderer->render("Square");
    }
}