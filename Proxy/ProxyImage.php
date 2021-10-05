<?php
namespace Proxy;

class ProxyImage implements ImageInterface
{
    private ?RealImage $realImage = null;
    private string $filName;

    public function __construct(string $filName)
    {
        $this->filName = $filName;
    }

    public function display()
    {
        if (is_null($this->realImage)) {
            $this->realImage = new RealImage($this->filName);
        }
        $this->realImage->display();
    }
}