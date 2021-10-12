<?php
namespace Memento;

class Memento
{
    private $stateName;

    public function __construct(string $stateName)
    {
        $this->stateName = $stateName;
    }

    public function getState(): string
    {
        return $this->stateName;
    }
}