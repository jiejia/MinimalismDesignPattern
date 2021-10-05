<?php
namespace Adapter;

interface AdvancedMediaPlayerInterface
{
    public function playVlc(string $fileName);
    public function playMp4(string $fileName);
}