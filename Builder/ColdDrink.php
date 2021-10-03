<?php
namespace Builder;

abstract class ColdDrink implements ItemInterface
{
    public function packing(): Bottle
    {
        return new Bottle();
    }

    public abstract function price();
}
