<?php
namespace Visitor;

class Monitor implements ComputerPartInterface
{
    public function accept(ComputerPartVisitor $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}