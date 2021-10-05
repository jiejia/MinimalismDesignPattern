<?php
namespace Adapter;

class Mp4Player implements AdvancedMediaPlayerInterface
{
    public function playMp4(string $fileName)
    {
        echo "Playing mp4 file. Name: " . $fileName . "\n";

    }

    public function playVlc(string $fileName)
    {
    }
}