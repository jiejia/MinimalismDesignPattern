<?php
namespace Iterator;

class NameIterator implements IteratorInterface
{
    public $index = 0;

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hasNext(): bool
    {
        if ($this->index < count($this->name)) {
            return true;
        }
        return false;
    }

    public function next()
    {
        if ($this->hasNext()) {
            return $this->name[$this->index ++];
        }
        return null;
    }
}