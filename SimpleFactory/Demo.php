<?php
namespace SimpleFactory;

class Demo
{
    public static function test()
    {
        $product1 = SimpleFactory::makeProduct(1);
        $product1->show();
    }
}