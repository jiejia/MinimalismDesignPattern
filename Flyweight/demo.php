<?php
namespace Flyweight;

require_once "../autoload.php";

$colors = ["Red", "Green", "White", "Black"];

for ($i = 0; $i < 20; $i ++) {
    $circle = ShapeFactory::getCircle($colors[rand(0, 3)]);
    $circle->setX(100);
    $circle->setY(100);
    $circle->setRadius(100);
    $circle->draw();
}

echo "The number of circle is " . count(ShapeFactory::$circleMap) . "\n";