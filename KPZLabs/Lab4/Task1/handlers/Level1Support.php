<?php

require_once __DIR__ . '/../core/AbstractHandler.php';

class Level1Support extends AbstractHandler {
    public function handle(int $choice): ?string {
        if ($choice === 1) {
            return "Level 1 Support: Basic information provided.";
        }
        return parent::handle($choice);
    }
}
