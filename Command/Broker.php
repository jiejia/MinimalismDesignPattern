<?php
namespace Command;

class Broker
{
    private array $orderList = [];

    public function takerOrder(OrderInterface $order)
    {
        $this->orderList []= $order;
    }

    public function placeOrders()
    {
        foreach ($this->orderList as $order) {
            $order->execute();
        }
        $this->orderList = [];
    }
}