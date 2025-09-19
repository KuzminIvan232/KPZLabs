<?php
require_once __DIR__ . '/src/Logger.php';
require_once __DIR__ . '/src/FileWriter.php';
require_once __DIR__ . '/src/FileLoggerAdapter.php';

echo "Консольний логер<br>";
$consoleLogger = new Logger();
$consoleLogger->Log("Це звичайне повідомлення");
$consoleLogger->Warn("Це попередження");
$consoleLogger->Error("Це помилка");

echo "<br>Файловий логер<br>";
$fileWriter = new FileWriter(__DIR__ . "/log.txt");
$fileLogger = new FileLoggerAdapter($fileWriter);
$fileLogger->Log("Це повідомлення у файл");
$fileLogger->Warn("Це попередження у файл");
$fileLogger->Error("Це помилка у файл");

echo "Перевірте файл log.txt для перегляду записів.<br>";
