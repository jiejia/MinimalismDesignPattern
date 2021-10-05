<?php
namespace  Bridge;

abstract class ShapeAbstract
{
    protected  ?DrawAPIInterface $drawAPI;

    public function __construct(DrawAPIInterface $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    public abstract function draw();
}