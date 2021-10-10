<?php
namespace Command;

class SellStock implements OrderInterface
{
    private Stock $abcStock;

    public function __construct(Stock $abcStock)
    {
        $this->abcStock = $abcStock;
    }

    public function execute()
    {
        $this->abcStock->sell();
    }
}