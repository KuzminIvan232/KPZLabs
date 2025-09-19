<?php

require_once __DIR__ . '/../core/AbstractHandler.php';

class Level3Support extends AbstractHandler {
    public function handle(int $choice): ?string {
        if ($choice === 3) {
            return "Level 3 Support: Advanced troubleshooting.";
        }
        return parent::handle($choice);
    }
}
