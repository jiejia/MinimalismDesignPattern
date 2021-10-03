<?php
namespace FactoryMethod;

class ConcreteProduct1 implements ProductInterface
{
    public function show()
    {
        echo "具体产品1显示 ...\n";
    }
}