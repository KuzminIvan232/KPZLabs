<?php

require_once __DIR__ . '/HeroDecorator.php';

class Weapon extends HeroDecorator {
    public function getName() {
        return $this->hero->getName() . " with Weapon";
    }

    public function getPower() {
        return $this->hero->getPower() + 30;
    }
}
