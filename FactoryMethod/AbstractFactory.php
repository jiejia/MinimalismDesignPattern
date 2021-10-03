<?php
namespace FactoryMethod;

abstract class AbstractFactory
{
    public abstract function newProduct(): ProductInterface;
}