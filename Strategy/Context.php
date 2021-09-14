<?php


namespace Strategy;


class Context
{
    protected  $operation;

    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    public function executeOperation($num1, $num2): float
    {
        return $this->operation->doOperation($num1, $num2);
    }
}