<?php

class Virus
{
    public float $weight;
    public int $age;
    public string $name;
    public string $type;
    /** @var Virus[] */
    public array $children = [];

    public function __construct(float $weight, int $age, string $name, string $type)
    {
        $this->weight = $weight;
        $this->age = $age;
        $this->name = $name;
        $this->type = $type;
        $this->children = [];
    }

    public function addChild(Virus $child): void
    {
        $this->children[] = $child;
    }

    public function __clone()
    {
        $clonedChildren = [];
        foreach ($this->children as $child) {
            $clonedChildren[] = clone $child;
        }
        $this->children = $clonedChildren;
    }

    public function print(int $level = 0): void
    {
        echo str_repeat("  ", $level) . "- Virus: {$this->name}, Type: {$this->type}, Age: {$this->age}, Weight: {$this->weight}<br>";
        foreach ($this->children as $child) {
            $child->print($level + 1);
        }
    }
}
