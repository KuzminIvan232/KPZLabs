<?php
require_once __DIR__ . '/mediator/Aircraft.php';
require_once __DIR__ . '/mediator/Runway.php';
require_once __DIR__ . '/mediator/CommandCentre.php';

use mediator\Aircraft;
use mediator\Runway;
use mediator\CommandCentre;

$runway1 = new Runway();
$runway2 = new Runway();

$plane1 = new Aircraft("Boeing 737");
$plane2 = new Aircraft("Airbus A320");

$centre = new CommandCentre([$runway1, $runway2]);

$plane1->setCommandCentre($centre);
$plane2->setCommandCentre($centre);

$plane1->requestLanding();
$plane2->requestLanding();
$plane1->requestTakeOff();
$plane2->requestTakeOff();
