<?php
namespace Interpreter;

interface ExpressionInterface
{
    public function interpret(string $context): bool;
}