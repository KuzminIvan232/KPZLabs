<?php

require_once __DIR__ . '/SmartTextReader.php';

class SmartTextReaderLocker {
    private $reader;
    private $pattern;

    public function __construct(SmartTextReader $reader, $pattern) {
        $this->reader = $reader;
        $this->pattern = $pattern;
    }

    public function read() {
        if (preg_match($this->pattern, $this->readerFileName())) {
            echo "Access denied!<br>";
            return null;
        }
        return $this->reader->read();
    }

    private function readerFileName() {
        $reflection = new ReflectionClass($this->reader);
        $prop = $reflection->getProperty('filePath');
        $prop->setAccessible(true);
        return $prop->getValue($this->reader);
    }
}
