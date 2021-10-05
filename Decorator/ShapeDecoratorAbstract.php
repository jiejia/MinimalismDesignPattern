<?php
namespace Decorator;

abstract class ShapeDecoratorAbstract implements ShapeInterface
{
    protected ShapeInterface $decoratorShape;

    public function __construct(ShapeInterface $decoratorShape)
    {
        $this->decoratorShape = $decoratorShape;
    }

    public function draw()
    {
        $this->decoratorShape->draw();
    }
}