<?php
namespace Proxy;

class RealImage implements ImageInterface
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($this->fileName);
    }

    public function display()
    {
        echo "Displaying " . $this->fileName . "\n";
    }

    private function loadFromDisk(string $fileName)
    {
        echo "Loading " . $this->fileName . "\n";
    }
}