<?php


namespace Strategy;


class StrategyPatternDemo
{
    public function test()
    {
        $context = new Context(New OperationAdd());

        print $context->executeOperation(2, 5);

        $context = new Context(New OperationSubtract());

        print $context->executeOperation(2, 5);

        $context = new Context(New OperationMultiply());

        print $context->executeOperation(2, 5);
    }
}