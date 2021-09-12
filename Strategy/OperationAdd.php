<?php


namespace Strategy;


class OperationAdd implements  OperationInterface
{
    public function doOperation($num1, $num2): float
    {
        return $num1 + $num2;
    }
}