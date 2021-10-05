<?php
namespace Decorator;

require_once "../autoload.php";

$circle = new Circle();

$redCircle = new RedShapeDecorator(new Circle());
$redRectangle = new RedShapeDecorator(new Rectangle());

echo "Circle with normal border\n";
$circle->draw();

echo "\nCircle of red border\n";
$redCircle->draw();

echo "\nRectangle of red border\n";
$redRectangle->draw();