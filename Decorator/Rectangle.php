<?php
namespace Decorator;

class Rectangle implements ShapeInterface
{
    public function draw()
    {
       echo "Shape: Rectangle\n";
    }
}