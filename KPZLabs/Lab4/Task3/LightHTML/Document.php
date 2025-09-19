<?php

namespace LightHTML;

class Document
{
    private array $elements = [];

    public function addElement(Element $element): self
    {
        $this->elements[] = $element;
        return $this;
    }

    public function render(): string
    {
        $html = "";
        foreach ($this->elements as $el) {
            $html .= $el->render() . "<br>";
        }
        return $html;
    }
}
