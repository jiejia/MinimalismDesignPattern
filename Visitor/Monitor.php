<?php
namespace Visitor;

class Monitor implements ComputerPartInterface
{
    public function accept(ComputerPartVisitorInterface $computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}