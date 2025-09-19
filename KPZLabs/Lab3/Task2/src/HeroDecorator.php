<?php

require_once __DIR__ . '/Hero.php';

abstract class HeroDecorator implements Hero {
    protected $hero;

    public function __construct(Hero $hero) {
        $this->hero = $hero;
    }

    public function getName() {
        return $this->hero->getName();
    }

    public function getPower() {
        return $this->hero->getPower();
    }
}
