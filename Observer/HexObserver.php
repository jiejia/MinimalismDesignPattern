<?php
namespace Observer;

class HexObserver extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Hex String: " . $this->subject->getState() . "\n";
    }
}