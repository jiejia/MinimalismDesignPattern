<?php
namespace AbstractFactory;

require_once "../autoload.php";

// 获取形状工厂
$shapeFactory = FactoryProducer::getFactory('shape');

//获取形状为 Circle 的对象
$shape1 = $shapeFactory->getShape('CIRCLE');
$shape1->draw();

//获取形状为 Rectangle 的对象
$shape2 = $shapeFactory->getShape('RECTANGLE');
$shape2->draw();

//获取形状为 Square 的对象
$shape3 = $shapeFactory->getShape('SQUARE');
$shape3->draw();

// 获取颜色工厂
$colorFactory = FactoryProducer::getFactory('color');

// 获取颜色为 Red 的对象
$color1 = $colorFactory->getColor('RED');
$color1->fill();

// 获取颜色为 Green 的对象
$color2 = $colorFactory->getColor('GREEN');
$color2->fill();

// 获取颜色为 Blue 的对象
$color3 = $colorFactory->getColor('BLUE');
$color3->fill();