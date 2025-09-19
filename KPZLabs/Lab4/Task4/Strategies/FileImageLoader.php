<?php

namespace Strategies;

class FileImageLoader implements ImageLoaderStrategy
{
    public function load($href): string
    {
        return "Loading image from file: {$href}";
    }
}
