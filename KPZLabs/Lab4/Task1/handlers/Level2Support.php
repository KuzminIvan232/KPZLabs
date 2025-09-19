<?php

require_once __DIR__ . '/../core/AbstractHandler.php';

class Level2Support extends AbstractHandler {
    public function handle(int $choice): ?string {
        if ($choice === 2) {
            return "Level 2 Support: Technical issue assistance.";
        }
        return parent::handle($choice);
    }
}
