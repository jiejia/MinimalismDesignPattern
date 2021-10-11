<?php
namespace Visitor;

class Mouse implements ComputerPartInterface
{
    public function accept(ComputerPartVisitor $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}