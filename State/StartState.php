<?php
namespace State;

class StartState implements StateInterface
{
    public function doAction(Context $context)
    {
        echo "Player is in start state\n";
        $context->setState($this);
    }

    public function __toString()
    {
       return "start State\n";
    }
}