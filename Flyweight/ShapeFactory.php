<?php
namespace Flyweight;

class ShapeFactory
{
    public static array $circleMap = [];

    public static function getCircle($color)
    {
        if (! isset(self::$circleMap[$color])) {
            self::$circleMap[$color] = new Circle($color);
            echo "Creating circle of colo r: " . $color . "\n";
        }
        return self::$circleMap[$color];
    }
}