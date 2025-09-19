<?php

namespace mediator;

class Aircraft
{
    private string $name;
    private bool $isTakingOff = false;
    private ?CommandCentre $centre = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setCommandCentre(CommandCentre $centre): void
    {
        $this->centre = $centre;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isTakingOff(): bool
    {
        return $this->isTakingOff;
    }

    public function requestLanding(): void
    {
        if ($this->centre) {
            $this->centre->handleLanding($this);
        }
    }

    public function requestTakeOff(): void
    {
        if ($this->centre) {
            $this->centre->handleTakeOff($this);
        }
    }

    public function markTakingOff(bool $status): void
    {
        $this->isTakingOff = $status;
    }
}
