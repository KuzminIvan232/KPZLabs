<?php

require_once __DIR__ . '/Hero.php';

class Mage implements Hero {
    public function getName() {
        return "Mage";
    }

    public function getPower() {
        return 40;
    }
}
