<?php
namespace Adapter;

interface MediaPlayerInterface
{
    public function play(string $audioType, string $fileName);
}