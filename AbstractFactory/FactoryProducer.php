<?php
namespace AbstractFactory;

class FactoryProducer
{
    public static function getFactory(string $choice): ? AbstractFactory
    {
        if ($choice == 'shape') {
            return new ShapeFactory();
        } else if ($choice == 'color') {
            return new ColorFactory();
        }
        return null;
    }
}