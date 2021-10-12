<?php
namespace Visitor;

class Keyboard implements ComputerPartInterface
{
    public function accept(ComputerPartVisitorInterface $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}