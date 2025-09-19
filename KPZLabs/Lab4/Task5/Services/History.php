<?php

namespace Services;

use Models\DocumentMemento;

class History
{
    private $mementos = [];

    public function push(DocumentMemento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function pop(): ?DocumentMemento
    {
        return array_pop($this->mementos);
    }
}
