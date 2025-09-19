<?php

require_once __DIR__ . '/HeroDecorator.php';

class Artifact extends HeroDecorator {
    public function getName() {
        return $this->hero->getName() . " with Artifact";
    }

    public function getPower() {
        return $this->hero->getPower() + 50;
    }
}
