<?php
namespace Command;

class Stock
{
    private string $name = 'ABC';
    private int $quantity = 10;

    public function buy()
    {
        echo "Stock [ Name: " . $this->name . " Quantity: " . $this->quantity . " ] bought\n";
    }

    public function sell()
    {
        echo "Stock [ Name: " . $this->name . " Quantity: " . $this->quantity . " ] sold\n";
    }
}