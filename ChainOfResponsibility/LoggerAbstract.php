<?php
namespace ChainOfResponsibility;

abstract class LoggerAbstract
{
    public const INFO = 1;
    public const DEBUG = 2;
    public const ERROR = 3;

    protected int $level;

    protected ?LoggerAbstract $nextLogger = null;

    public function setNextLogger(LoggerAbstract $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    public function logMessage(int $level, string $message)
    {
        if ($this->level <= $level) {
            $this->write($message);
        }
        if ($this->nextLogger != null) {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    abstract protected function write(string $message);
}