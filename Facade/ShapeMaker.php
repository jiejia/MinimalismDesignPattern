<?php
namespace Facade;

class ShapeMaker
{
    private ShapeInterface $circle;
    private ShapeInterface $rectangle;
    private ShapeInterface $square;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->rectangle = new Rectangle();
        $this->square = new Square();
    }

    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawSquare()
    {
        $this->square->draw();
    }
}