<?php
namespace AbstractFactory;

abstract class AbstractFactory
{
    abstract function getColor(String $color): ?ColorInterface;
    abstract function getShape(String $shape): ?ShapeInterface;
}