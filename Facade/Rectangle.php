<?php
namespace Facade;

class Rectangle implements ShapeInterface
{
    public function draw()
    {
       echo "Rectangle: draw()\n";
    }
}