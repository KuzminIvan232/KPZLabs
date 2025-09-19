<?php

namespace Models;

class DocumentMemento
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function getSavedContent()
    {
        return $this->content;
    }
}
