<?php
namespace Command;

class BuyStock implements OrderInterface
{
    private Stock $abcStock;

    public function __construct(Stock $abcStock)
    {
        $this->abcStock = $abcStock;
    }

    public function execute()
    {
        $this->abcStock->buy();
    }
}