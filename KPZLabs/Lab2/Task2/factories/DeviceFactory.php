<?php

abstract class DeviceFactory {
    protected string $brand;

    public function __construct(string $brand) {
        $this->brand = $brand;
    }

    public function createDevice(string $type): Device {
        return new Device($this->brand, $type);
    }
}
