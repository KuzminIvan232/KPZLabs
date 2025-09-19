<?php

require_once 'builders/BuilderInterface.php';
require_once 'builders/HeroBuilder.php';
require_once 'builders/EnemyBuilder.php';
require_once 'Character.php';
require_once 'Director.php';

$director = new Director();

$heroBuilder = new HeroBuilder();
$hero = $director->buildHero($heroBuilder);
$hero->describe();

$enemyBuilder = new EnemyBuilder();
$enemy = $director->buildEnemy($enemyBuilder);
$enemy->describe();
