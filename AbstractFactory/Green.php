<?php
namespace AbstractFactory;

class Green implements ColorInterface
{
    public function fill()
    {
        echo "Inside Green::fill() method\n";
    }
}