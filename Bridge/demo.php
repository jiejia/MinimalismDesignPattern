<?php
namespace Bridge;

require_once "../autoload.php";

$redCircle = new Circle(100, 100, 10, new RedCircle());
$greenCircle = new Circle(100, 100, 10, new GreenCircle());

$redCircle->draw();
$greenCircle->draw();