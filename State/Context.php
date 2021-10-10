<?php
namespace State;

class Context
{
    private ?StateInterface $state;

    public function __construct()
    {
        $this->state = NULL;
    }

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    public function getState(): ?StateInterface
    {
        return $this->state;
    }
}