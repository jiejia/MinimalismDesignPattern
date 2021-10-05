<?php
namespace Template;

class Cricket extends GameAbstract
{
    public function endPlay()
    {
        echo "Cricket Game Finished!\n";
    }

    public function initialize()
    {
        echo "Cricket Game Initialized! Start playing.\n";
    }

    public function startPlay()
    {
        echo "Cricket Game Started. Enjoy the game!\n";
    }
}