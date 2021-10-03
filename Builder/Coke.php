<?php
namespace Builder;

class Coke extends ColdDrink
{
    public function price(): float
    {
        return 30;
    }

    public function name(): string
    {
        return "Coke";
    }
}