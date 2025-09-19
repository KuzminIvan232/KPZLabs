<?php

require_once __DIR__ . '/LightHTML/HTMLElement.php';
require_once __DIR__ . '/LightHTML/Image.php';
require_once __DIR__ . '/Strategies/ImageLoaderStrategy.php';
require_once __DIR__ . '/Strategies/FileImageLoader.php';
require_once __DIR__ . '/Strategies/NetworkImageLoader.php';

use LightHTML\Image;

$fileImage = new Image("images/local_pic.png");
echo $fileImage->render();

$netImage = new Image("http://example.com/picture.jpg");
echo $netImage->render();
