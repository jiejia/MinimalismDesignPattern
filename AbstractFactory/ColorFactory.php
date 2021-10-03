<?php
namespace AbstractFactory;

class ColorFactory extends AbstractFactory
{
    public function getShape(string $shape): ?ShapeInterface
    {
        return null;
    }

    function getColor(string $color): ?ColorInterface
    {
        if ($color == 'RED') {
            return new Red();
        } else if ($color == 'GREEN') {
            return new Green();
        } else if ($color == 'BLUE') {
            return new Blue();
        }
        return null;
    }
}