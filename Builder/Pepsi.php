<?php
namespace Builder;

class Pepsi extends ColdDrink
{
    public function price(): float
    {
        return 35.0;
    }

    public function name(): string
    {
        return "Pepsi";
    }
}