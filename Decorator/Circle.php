<?php
namespace Decorator;

class Circle implements ShapeInterface
{
    public function draw()
    {
       echo "Shape: Circle\n";
    }
}