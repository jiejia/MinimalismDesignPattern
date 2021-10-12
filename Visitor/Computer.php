<?php
namespace Visitor;

class Computer implements ComputerPartInterface
{
    private $parts;

    public function __construct()
    {
        $this->parts = [new Mouse(), new Keyboard(), new Monitor()];
    }

    public function accept(ComputerPartVisitorInterface $computerPartVisitor)
    {
        for ($i = 0; $i < count($this->parts); $i ++) {
            $this->parts[$i]->accept($computerPartVisitor);
        }
        $computerPartVisitor->visit($this);
    }
}