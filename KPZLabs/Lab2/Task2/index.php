<?php

require_once __DIR__ . '/models/Device.php';
require_once __DIR__ . '/factories/DeviceFactory.php';
require_once __DIR__ . '/factories/IProneFactory.php';
require_once __DIR__ . '/factories/KiaomiFactory.php';
require_once __DIR__ . '/factories/BalaxyFactory.php';

function testFactory(DeviceFactory $factory) {
    $types = ['Laptop', 'Netbook', 'EBook', 'Smartphone'];

    foreach ($types as $type) {
        $device = $factory->createDevice($type);
        echo $device->getName() . "<br>";
    }
    echo "------------------<br>";
}


$iprFactory = new IProneFactory();
$kiFactory = new KiaomiFactory();
$balaxyFactory = new BalaxyFactory();

testFactory($iprFactory);
testFactory($kiFactory);
testFactory($balaxyFactory);
