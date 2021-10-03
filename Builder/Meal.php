<?php
namespace Builder;

class Meal
{
    protected array $list = [];

    public function addItem(ItemInterface $item)
    {
        $this->list[] = $item;
    }

    public function getCost(): float
    {
        $cost = 0;
        foreach ($this->list as $item) {
            $cost += $item->price();
        }
        return $cost;
    }

    public function showItems()
    {
        foreach ($this->list as $item) {
            echo "Item: " . $item->name();
            echo ", Packing: " . $item->packing()->pack();
            echo ", Price: " . $item->price() . "\n";
        }
    }
}