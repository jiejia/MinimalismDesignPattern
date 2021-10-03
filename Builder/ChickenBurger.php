<?php
namespace Builder;

class ChickenBurger extends Burger
{
    public function price(): float
    {
       return 50.5;
    }

    public function name(): string
    {
        return "Chicken Burger";
    }
}