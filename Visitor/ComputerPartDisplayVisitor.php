<?php
namespace Visitor;

class ComputerPartDisplayVisitor implements ComputerPartVisitorInterface
{
    public function visit($part)
    {
        echo "Display " . get_class($part) . "\n";
    }
}