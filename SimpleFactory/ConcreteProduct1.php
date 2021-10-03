<?php
namespace SimpleFactory;

class ConcreteProduct1 implements ProductInterface
{
    public function show()
    {
        echo "I am product 1";
    }
}