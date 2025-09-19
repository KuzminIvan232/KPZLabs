<?php

namespace Models;

class TextDocument
{
    private $content;

    public function __construct($content = "")
    {
        $this->content = $content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
