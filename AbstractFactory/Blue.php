<?php
namespace AbstractFactory;

class Blue implements ColorInterface
{
    public function fill()
    {
        echo "Inside Blue::fill() method\n";
    }
}