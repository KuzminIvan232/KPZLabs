<?php

namespace Strategies;

class NetworkImageLoader implements ImageLoaderStrategy
{
    public function load($href): string
    {
        return "Loading image from network: {$href}";
    }
}
