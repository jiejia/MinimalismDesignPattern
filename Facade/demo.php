<?php
namespace Facade;

require_once "../autoload.php";

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawRectangle();
$shapeMaker->drawSquare();