<?php
namespace AbstractFactory;

class Rectangle implements ShapeInterface
{
    public function draw()
    {
        echo "Inside Rectangle::draw() method\n";
    }
}