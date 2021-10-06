<?php
namespace ChainOfResponsibility;

class ErrorLogger extends LoggerAbstract
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "Standard Error::Logger " . $message . "\n";
    }
}