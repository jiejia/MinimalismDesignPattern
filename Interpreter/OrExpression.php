<?php
namespace Interpreter;

class OrExpression implements ExpressionInterface
{
    private $expr1 = null;
    private $expr2 = null;

    public function __construct(ExpressionInterface $expr1, ExpressionInterface $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret(string $context): bool
    {
        return $this->expr1->interpret($context) || $this->expr2->interpret($context);
    }
}