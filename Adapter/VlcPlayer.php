<?php
namespace Adapter;

class VlcPlayer implements AdvancedMediaPlayerInterface
{
    public function playMp4(string $fileName)
    {
    }

    public function playVlc(string $fileName)
    {
        echo "Playing vlc file. Name: " . $fileName . "\n";
    }
}