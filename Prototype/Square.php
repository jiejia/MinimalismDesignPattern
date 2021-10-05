<?php
namespace Prototype;

class Square extends ShapeAbstract
{
    public function __construct()
    {
        $this->type = "Square";
    }

    public function draw()
    {
        echo "Inside Square::draw() method.\n";
    }
}
