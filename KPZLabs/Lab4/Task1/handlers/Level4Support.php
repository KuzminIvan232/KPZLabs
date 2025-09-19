<?php

require_once __DIR__ . '/../core/AbstractHandler.php';

class Level4Support extends AbstractHandler {
    public function handle(int $choice): ?string {
        if ($choice === 4) {
            return "Level 4 Support: Specialist connected.";
        }
        return parent::handle($choice);
    }
}
