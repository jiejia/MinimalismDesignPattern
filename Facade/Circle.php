<?php
namespace Facade;

class Circle implements ShapeInterface
{
    public function draw()
    {
       echo "Circle: draw()\n";
    }
}