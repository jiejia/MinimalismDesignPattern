<?php
namespace Iterator;

class NameRepository implements ContainerInterface
{
    public $name = ["Robert", "John", "Julie", "Lora"];

    public function getIterator(): NameIterator
    {
        return new NameIterator($this->name);
    }
}