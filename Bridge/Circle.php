<?php
namespace Bridge;

class Circle extends ShapeAbstract
{
    private float $x;
    private float $y;
    private float $radius;

    public function __construct($x, $y, $radius, DrawAPIInterface $drawAPI)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        parent::__construct($drawAPI);
    }

    public function draw()
    {
        $this->drawAPI->drawCircle($this->radius, $this->x, $this->y);
    }
}