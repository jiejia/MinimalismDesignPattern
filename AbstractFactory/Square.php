<?php
namespace AbstractFactory;

class Square implements ShapeInterface
{
    public function draw()
    {
        echo "Inside Square::draw() method\n";
    }
}