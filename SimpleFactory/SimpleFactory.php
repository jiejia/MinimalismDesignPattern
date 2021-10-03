<?php
namespace SimpleFactory;

class SimpleFactory
{
    protected const KIND = [
        'product1' => 0,
        'product2' => 1
    ];

    public static function makeProduct(int $kind): ?ProductInterface
    {
        switch ($kind){
            case self::KIND['product1']:
                return new ConcreteProduct1();
            case self::KIND['product2']:
                return new ConcreteProduct2();
            break;
        };
        return null;
    }
}