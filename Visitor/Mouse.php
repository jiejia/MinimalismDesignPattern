<?php
namespace Visitor;

class Mouse implements ComputerPartInterface
{
    public function accept(ComputerPartVisitorInterface $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}