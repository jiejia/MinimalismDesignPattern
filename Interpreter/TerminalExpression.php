<?php
namespace Interpreter;

class TerminalExpression implements ExpressionInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function interpret(string $context): bool
    {
        if (strstr($context, $this->data) !== false) {
            return true;
        }
        return false;
    }
}