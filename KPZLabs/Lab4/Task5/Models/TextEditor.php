<?php

namespace Models;

class TextEditor
{
    private $document;

    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }

    public function write($text)
    {
        $this->document->setContent($this->document->getContent() . $text);
    }

    public function getContent()
    {
        return $this->document->getContent();
    }

    public function save(): DocumentMemento
    {
        return new DocumentMemento($this->document->getContent());
    }

    public function restore(DocumentMemento $memento)
    {
        $this->document->setContent($memento->getSavedContent());
    }
}
