<?php

class Logger {
    public function Log($message) {
        echo "\033[32m[LOG] $message\033[0m<br>";
    }

    public function Error($message) {
        echo "\033[31m[ERROR] $message\033[0m<br>";
    }

    public function Warn($message) {
        echo "\033[33m[WARNING] $message\033[0m<br>";
    }
}
