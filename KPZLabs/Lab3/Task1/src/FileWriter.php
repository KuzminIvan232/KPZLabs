<?php

class FileWriter {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function Write($text) {
        file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    public function WriteLine($text) {
        file_put_contents($this->filePath, $text . PHP_EOL, FILE_APPEND);
    }
}