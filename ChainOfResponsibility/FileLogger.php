<?php
namespace ChainOfResponsibility;

class FileLogger extends LoggerAbstract
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "Standard File::Logger " . $message . "\n";
    }
}