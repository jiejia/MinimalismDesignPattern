<?php
namespace Adapter;

class MediaAdapter implements MediaPlayerInterface
{
    private ?AdvancedMediaPlayerInterface $advancedMusicPlayer;

    public function __construct(string $audioType)
    {
        if ($audioType == 'vlc') {
            $this->advancedMusicPlayer = new VlcPlayer();
        } else if ($audioType == 'mp4') {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }

    public function play(string $audioType, string $fileName)
    {
        if ($audioType == 'vlc') {
            $this->advancedMusicPlayer->playVlc($fileName);
        } else if($audioType == 'mp4') {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}