<?php
namespace Builder;

class Bottle implements PackingInterface
{
    public function pack(): string
    {
        return "Bottle";
    }
}