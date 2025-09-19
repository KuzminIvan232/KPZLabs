<?php

final class Authenticator
{
    private static ?Authenticator $instance = null;

    private function __construct() {}

    private function __clone() {}

    public function __wakeup() {}

    public static function getInstance(): Authenticator
    {
        if (self::$instance === null) {
            self::$instance = new Authenticator();
        }
        return self::$instance;
    }

    public function authenticate(string $user, string $password): bool
    {
        return ($user === "admin" && $password === "1234");
    }
}
