<?php

require_once __DIR__ . '/SmartTextReader.php';

class SmartTextChecker {
    private $reader;

    public function __construct(SmartTextReader $reader) {
        $this->reader = $reader;
    }

    public function read() {
        echo "Opening file...<br>";
        $data = $this->reader->read();
        echo "File read successfully.<br>";
        echo "Closing file...<br>";

        $lineCount = count($data);
        $charCount = 0;
        foreach ($data as $line) {
            $charCount += count($line);
        }

        echo "Total lines: $lineCount<br>";
        echo "Total characters: $charCount<br>";

        return $data;
    }
}
