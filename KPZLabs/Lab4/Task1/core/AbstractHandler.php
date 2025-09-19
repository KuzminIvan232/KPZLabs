<?php

require_once __DIR__ . '/../interfaces/Handler.php';

abstract class AbstractHandler implements Handler {
    private ?Handler $next = null;

    public function setNext(Handler $handler): Handler {
        $this->next = $handler;
        return $handler;
    }

    public function handle(int $choice): ?string {
        if ($this->next) {
            return $this->next->handle($choice);
        }
        return null;
    }
}
