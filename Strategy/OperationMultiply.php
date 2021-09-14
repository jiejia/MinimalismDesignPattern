<?php


namespace Strategy;


class OperationMultiply implements OperationInterface
{
    public function doOperation($num1, $num2): float
    {
        return $num1 * $num2;
    }
}