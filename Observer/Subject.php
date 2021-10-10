<?php
namespace Observer;

class Subject
{
    private array $observers = [];

    private int $state = 0;

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state)
    {
        $this->state = $state;
        $this->notifyAllObservers();
    }

    public function attach(Observer $observer)
    {
        $this->observers []= $observer;
    }

    public function notifyAllObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}