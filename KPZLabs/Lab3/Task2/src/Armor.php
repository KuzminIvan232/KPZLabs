<?php

require_once __DIR__ . '/HeroDecorator.php';

class Armor extends HeroDecorator {
    public function getName() {
        return $this->hero->getName() . " with Armor";
    }

    public function getPower() {
        return $this->hero->getPower() + 20;
    }
}
