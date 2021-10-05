<?php
namespace Template;

class Football extends GameAbstract
{
    public function endPlay()
    {
        echo "Football Game Finished!\n";
    }

    public function initialize()
    {
        echo "Football Game Initialized! Start playing.\n";
    }

    public function startPlay()
    {
        echo "Football Game Started. Enjoy the game!\n";
    }
}