<?php
namespace Decorator;

class RedShapeDecorator extends ShapeDecoratorAbstract
{
    public function __construct(ShapeInterface $decoratorShape)
    {
        parent::__construct($decoratorShape);
    }

    public function draw()
    {
        $this->decoratorShape->draw();
        $this->setRedBorder($this->decoratorShape);
    }

    private function setRedBorder(ShapeInterface $decoratorShape)
    {
        echo "Border Color: Red\n";
    }
}