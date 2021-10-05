<?php
namespace Template;

abstract class GameAbstract
{
    abstract function initialize();
    abstract function startPlay();
    abstract function endPlay();

    public function play()
    {
        $this->initialize();
        $this->startPlay();
        $this->endPlay();
    }
}