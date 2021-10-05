<?php
namespace Prototype;

class ShapeCache
{
    private static array $shapeMap = [];

    public static function getShape($shapeId)
    {
        $cachedShape = self::$shapeMap[$shapeId];
        return clone $cachedShape;
    }

    // 对每种形状都运行数据库查询，并创建该形状
    // shapeMap.put(shapeKey, shape);
    // 例如，我们要添加三种形状
    public static function loadCache()
    {
        $circle = new Circle();
        $circle->setId("1");
        self::$shapeMap[$circle->getId()] = $circle;

        $square = new Square();
        $square->setId("2");
        self::$shapeMap[$square->getId()] = $square;

        $rectangle = new Rectangle();
        $rectangle->setId("3");
        self::$shapeMap[$rectangle->getId()] = $rectangle;
    }
}