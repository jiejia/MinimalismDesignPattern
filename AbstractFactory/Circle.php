<?php
namespace AbstractFactory;

class Circle implements ShapeInterface
{
    public function draw()
    {
        echo "Inside Circle::draw() method\n";
    }
}