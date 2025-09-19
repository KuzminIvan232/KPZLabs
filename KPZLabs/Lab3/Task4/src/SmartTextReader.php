<?php

class SmartTextReader {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function read() {
        if (!file_exists($this->filePath)) {
            throw new Exception("File not found: " . $this->filePath);
        }

        $lines = file($this->filePath, FILE_IGNORE_NEW_LINES);
        $result = [];

        foreach ($lines as $line) {
            $result[] = str_split($line);
        }

        return $result;
    }
}
