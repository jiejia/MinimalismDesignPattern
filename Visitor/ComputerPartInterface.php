<?php
namespace Visitor;

interface ComputerPartInterface
{
    public function accept(ComputerPartVisitorInterface $computerPartVisitor);
}