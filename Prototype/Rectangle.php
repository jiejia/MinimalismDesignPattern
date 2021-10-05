<?php
namespace Prototype;

class Rectangle extends ShapeAbstract
{
    public function __construct()
    {
        $this->type = "Rectangle";
    }

    public function draw()
    {
        echo "Inside Square::draw() method.\n";
    }
}
