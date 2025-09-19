<?php

class Device {
    private string $brand;
    private string $type;

    public function __construct(string $brand, string $type) {
        $this->brand = $brand;
        $this->type = $type;
    }

    public function getName(): string {
        return "{$this->brand} {$this->type}";
    }
}
