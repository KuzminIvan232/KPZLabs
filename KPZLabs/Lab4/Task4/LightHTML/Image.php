<?php

namespace LightHTML;

use Strategies\ImageLoaderStrategy;
use Strategies\FileImageLoader;
use Strategies\NetworkImageLoader;

class Image extends HTMLElement
{
    private $href;
    private $loader;

    public function __construct($href)
    {
        parent::__construct("img");
        $this->href = $href;

        if (strpos($href, "http") === 0) {
            $this->loader = new NetworkImageLoader();
        } else {
            $this->loader = new FileImageLoader();
        }
    }

    public function render()
    {
        $result = $this->loader->load($this->href);
        return "<br>Image element → {$result}<br>";
    }
}
