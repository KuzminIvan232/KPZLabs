<?php

namespace mediator;

class Runway
{
    private string $id;
    private ?Aircraft $aircraft = null;

    public function __construct()
    {
        $this->id = uniqid("Runway_");
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function isFree(): bool
    {
        return $this->aircraft === null;
    }

    public function occupy(Aircraft $aircraft): void
    {
        $this->aircraft = $aircraft;
        $this->highlightRed();
    }

    public function release(): void
    {
        $this->aircraft = null;
        $this->highlightGreen();
    }

    private function highlightRed(): void
    {
        echo "Runway {$this->id} is busy!<br>";
    }

    private function highlightGreen(): void
    {
        echo "Runway {$this->id} is free!<br>";
    }
}
