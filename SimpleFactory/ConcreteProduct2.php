<?php
namespace SimpleFactory;

class ConcreteProduct2 implements ProductInterface
{
    public function show()
    {
        echo "I am product 2";
    }
}