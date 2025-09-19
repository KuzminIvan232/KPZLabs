<?php

class Character
{
    public ?int $height = null;
    public ?string $build = null;
    public ?string $hairColor = null;
    public ?string $eyeColor = null;
    public ?string $clothes = null;
    public array $inventory = [];
    public string $type; // "Hero" або "Enemy"
    public array $actions = [];

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function describe(): void
    {
        echo "{$this->type} Character:<br>";
        echo "Height: {$this->height}<br>";
        echo "Build: {$this->build}<br>";
        echo "Hair Color: {$this->hairColor}<br>";
        echo "Eye Color: {$this->eyeColor}<br>";
        echo "Clothes: {$this->clothes}<br>";
        echo "Inventory: " . implode(", ", $this->inventory) . "<br>";
        echo ($this->type === 'Hero' ? "Good deeds: " : "Evil deeds: ") . implode(", ", $this->actions) . "<br><br>";
    }
}
