<?php

require_once __DIR__ . '/LightNode.php';

class LightTextNode extends LightNode {
    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function outerHTML() {
        return htmlspecialchars($this->text);
    }

    public function innerHTML() {
        return htmlspecialchars($this->text);
    }
}
