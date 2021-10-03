<?php
namespace FactoryMethod;

class ConcreteFactory2 extends AbstractFactory
{
    public function newProduct(): ProductInterface
    {
        echo "具体工厂2生成->具体产品2...\n";
        return new ConcreteProduct2();
    }
}