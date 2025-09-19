<?php

namespace Strategies;

interface ImageLoaderStrategy
{
    public function load($href): string;
}
