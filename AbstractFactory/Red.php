<?php
namespace AbstractFactory;

class Red implements ColorInterface
{
    public function fill()
    {
        echo "Inside Red::fill() method\n";
    }
}