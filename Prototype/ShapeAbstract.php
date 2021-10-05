<?php
namespace Prototype;

abstract class ShapeAbstract
{
    protected string $id;

    protected string $type;

    public abstract function draw();

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {

    }
}