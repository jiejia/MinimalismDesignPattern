<?php
namespace State;

class StopState implements StateInterface
{
    public function doAction(Context $context)
    {
        echo "Player is in stop state\n";
        $context->setState($this);
    }

    public function __toString()
    {
       return "Stop State\n";
    }
}