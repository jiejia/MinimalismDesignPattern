<?php
namespace Visitor;

interface ComputerPartInterface
{
    public function accept(ComputerPartVisitor $computerPartVisitor);
}