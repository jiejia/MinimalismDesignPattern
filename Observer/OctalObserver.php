<?php
namespace Observer;

class OctalObserver extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Octal String: " . $this->subject->getState() . "\n";
    }
}