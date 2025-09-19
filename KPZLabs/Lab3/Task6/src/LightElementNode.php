<?php

require_once __DIR__ . '/LightNode.php';

class LightElementNode extends LightNode {
    private $tagName;
    private $displayType; // block або inline
    private $selfClosing; // true якщо тег одиночний
    private $classes = [];
    private $children = [];

    public function __construct($tagName, $displayType = 'block', $selfClosing = false, $classes = []) {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->selfClosing = $selfClosing;
        $this->classes = $classes;
    }

    public function addChild(LightNode $child) {
        if ($this->selfClosing) {
            throw new Exception("Self-closing tag <{$this->tagName}/> cannot have children");
        }
        $this->children[] = $child;
    }

    public function childCount() {
        return count($this->children);
    }

    public function innerHTML() {
        $html = '';
        foreach ($this->children as $child) {
            $html .= $child->outerHTML();
        }
        return $html;
    }

    public function outerHTML() {
        $classAttr = !empty($this->classes) ? ' class="' . implode(' ', $this->classes) . '"' : '';
        if ($this->selfClosing) {
            return "<{$this->tagName}{$classAttr}/>";
        } else {
            return "<{$this->tagName}{$classAttr}>{$this->innerHTML()}</{$this->tagName}>";
        }
    }
}
