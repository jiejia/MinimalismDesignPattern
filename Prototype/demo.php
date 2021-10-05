<?php
namespace Prototype;

require_once "../autoload.php";

ShapeCache::loadCache();

$cloneShape = ShapeCache::getShape("1");
echo "Shape: " . $cloneShape->getType() . "\n";

$cloneShape2 = ShapeCache::getShape("2");
echo "Shape: " . $cloneShape2->getType() . "\n";

$cloneShape3 = ShapeCache::getShape("3");
echo "Shape: " . $cloneShape3->getType() . "\n";