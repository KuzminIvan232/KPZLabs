<?php

require_once __DIR__ . '/Hero.php';

class Palladin implements Hero {
    public function getName() {
        return "Palladin";
    }

    public function getPower() {
        return 60;
    }
}
