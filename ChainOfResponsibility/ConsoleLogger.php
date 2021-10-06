<?php
namespace ChainOfResponsibility;

class ConsoleLogger extends LoggerAbstract
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "Standard Console::Logger " . $message . "\n";
    }
}