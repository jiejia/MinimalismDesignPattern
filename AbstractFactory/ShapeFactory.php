<?php
namespace AbstractFactory;

class ShapeFactory extends AbstractFactory
{
    public function getShape(string $shape): ?ShapeInterface
    {
       if ($shape == 'CIRCLE') {
           return new Circle();
       } else if ($shape == 'RECTANGLE') {
           return new Rectangle();
       } else if ($shape == 'SQUARE') {
           return new Square();
       }
       return null;
    }

    function getColor(string $color): ?ColorInterface
    {
        return null;
    }
}