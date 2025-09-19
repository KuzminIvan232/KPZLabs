<?php

namespace mediator;

class CommandCentre
{
    private array $runways = [];

    public function __construct(array $runways)
    {
        $this->runways = $runways;
    }

    public function handleLanding(Aircraft $aircraft): void
    {
        echo "Aircraft {$aircraft->getName()} requests landing...<br>";
        foreach ($this->runways as $runway) {
            if ($runway->isFree()) {
                echo "Aircraft {$aircraft->getName()} has landed on {$runway->getId()}.<br>";
                $runway->occupy($aircraft);
                return;
            }
        }
        echo "No free runway for {$aircraft->getName()}!<br>";
    }

    public function handleTakeOff(Aircraft $aircraft): void
    {
        echo "Aircraft {$aircraft->getName()} requests take-off...<br>";
        foreach ($this->runways as $runway) {
            if (!$runway->isFree()) {
                $runway->release();
                echo "Aircraft {$aircraft->getName()} has taken off.<br>";
                $aircraft->markTakingOff(true);
                return;
            }
        }
        echo "No runway to release for {$aircraft->getName()}!<br>";
    }
}
