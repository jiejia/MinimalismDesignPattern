<?php
namespace Observer;

class BinaryObserver extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Binary String: " . $this->subject->getState() . "\n";
    }
}