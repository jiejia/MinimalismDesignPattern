<?php
namespace FactoryMethod;

class ConcreteFactory1 extends AbstractFactory
{
    public function newProduct(): ProductInterface
    {
        echo "具体工厂1生成->具体产品1...\n";
        return new ConcreteProduct1();
    }
}