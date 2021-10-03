<?php
namespace Builder;

abstract class Burger implements ItemInterface
{
    public function packing(): Wrapper
    {
        return new Wrapper();
    }

    public abstract function price();
}
