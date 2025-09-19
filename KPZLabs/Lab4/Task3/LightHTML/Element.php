<?php

namespace LightHTML;

class Element
{
    private string $tag;
    private array $attributes = [];
    private array $children = [];
    private array $eventListeners = [];

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public function setAttribute(string $name, string $value): self
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function addChild(Element $child): self
    {
        $this->children[] = $child;
        return $this;
    }

    public function addEventListener(string $event, EventListener $listener): self
    {
        if (!isset($this->eventListeners[$event])) {
            $this->eventListeners[$event] = [];
        }
        $this->eventListeners[$event][] = $listener;
        return $this;
    }

    public function triggerEvent(string $event): void
    {
        if (isset($this->eventListeners[$event])) {
            foreach ($this->eventListeners[$event] as $listener) {
                $listener->handle($this);
            }
        }
    }

    public function render(): string
    {
        $attrs = '';
        foreach ($this->attributes as $k => $v) {
            $attrs .= " $k=\"$v\"";
        }

        $html = "<{$this->tag}$attrs>";
        foreach ($this->children as $child) {
            $html .= $child->render();
        }
        $html .= "</{$this->tag}>";

        return $html;
    }
}
