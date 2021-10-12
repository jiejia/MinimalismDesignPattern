<?php
namespace Memento;

class Originator
{
    private $stateName;

    public function setState(string $stateName)
    {
        $this->stateName = $stateName;
    }

    public function getState()
    {
        return $this->stateName;
    }

    public function saveToMemento(): Memento
    {
        return new Memento($this->stateName);
    }

    public function getStateFromMemento(Memento $memento)
    {
        $this->stateName = $memento->getState();
    }
}