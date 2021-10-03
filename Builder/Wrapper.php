<?php
namespace Builder;

class Wrapper implements PackingInterface
{
    public function pack(): string
    {
        return "Wrapper";
    }
}