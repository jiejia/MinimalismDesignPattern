<?php
namespace Prototype;

class Circle extends ShapeAbstract
{
    public function __construct()
    {
        $this->type = "Circle";
    }

    public function draw()
    {
        echo "Inside Circle::draw() method.\n";
    }
}
