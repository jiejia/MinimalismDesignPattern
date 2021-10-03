<?php
namespace FactoryMethod;

class ConcreteProduct2 implements ProductInterface
{
    public function show()
    {
        echo "具体产品2显示 ...\n";
    }
}