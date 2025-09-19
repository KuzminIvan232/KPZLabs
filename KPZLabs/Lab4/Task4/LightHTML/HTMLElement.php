<?php

namespace LightHTML;

abstract class HTMLElement
{
    protected $tag;
    protected $content = '';

    public function __construct($tag, $content = '')
    {
        $this->tag = $tag;
        $this->content = $content;
    }

    public function render()
    {
        return "<{$this->tag}>{$this->content}</{$this->tag}>";
    }
}
