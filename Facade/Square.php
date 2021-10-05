<?php
namespace Facade;

class Square implements ShapeInterface
{
    public function draw()
    {
       echo "Square: draw()\n";
    }
}