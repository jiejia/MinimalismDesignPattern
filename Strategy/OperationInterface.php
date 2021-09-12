<?php

namespace Strategy;


interface OperationInterface
{
    public function doOperation($num1, $num2): float;
}