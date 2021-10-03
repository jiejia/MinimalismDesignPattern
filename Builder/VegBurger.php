<?php
namespace Builder;

class VegBurger extends Burger
{
    public function price(): float
    {
       return 25.0;
    }

    public function name(): string
    {
        return "Veg Burger";
    }
}