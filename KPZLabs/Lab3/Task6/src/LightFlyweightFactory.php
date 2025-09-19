<?php

class LightFlyweightFactory {
    private static $tags = [];

    public static function getTag($tagName) {
        if (!isset(self::$tags[$tagName])) {
            self::$tags[$tagName] = $tagName;
        }
        return self::$tags[$tagName];
    }
}
