<?php
namespace Visitor;

class ComputerPartDisplayVisitor implements ComputerPartVisitorInterface
{
    public function visit($part)
    {
        echo "Display " . $part;
    }
}