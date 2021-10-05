<?php
namespace Adapter;

class AudioPlayer implements MediaPlayerInterface
{
    public function play(string $audioType, string $fileName)
    {
        if ($audioType == 'mp3') {
            echo "Playing mp3 file: Name: " . $fileName . "\n";
        } else if ($audioType == 'vlc' || $audioType == 'mp4') {
            $mediaAdapter = new MediaAdapter($audioType);
            $mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. " . $audioType . " format not supported" . "\n";
        }
    }
}