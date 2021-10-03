<?php
namespace FactoryMethod;

require_once "../autoload.php";

$factory1 = new ConcreteFactory1();

$factory1->newProduct()->show();

$factory2 = new ConcreteFactory2();

$factory2->newProduct()->show();