<?php

require_once __DIR__ . '/Hero.php';

class Warrior implements Hero {
    public function getName() {
        return "Warrior";
    }

    public function getPower() {
        return 50;
    }
}
