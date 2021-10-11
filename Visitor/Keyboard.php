<?php
namespace Visitor;

class Keyboard implements ComputerPartInterface
{
    public function accept(ComputerPartVisitor $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}