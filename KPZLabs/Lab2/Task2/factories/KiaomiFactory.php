<?php

require_once __DIR__ . '/../models/Device.php';
require_once 'DeviceFactory.php';

class KiaomiFactory extends DeviceFactory {
    public function __construct() {
        parent::__construct('Kiaomi');
    }
}
