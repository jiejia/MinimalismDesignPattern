<?php
namespace Command;

require_once  '../autoload.php';

$abcStock = new Stock();

$buyStockOrder = new BuyStock($abcStock);
$sellStockOrder = new SellStock($abcStock);

$broker = new Broker();
$broker->takerOrder($buyStockOrder);
$broker->takerOrder($sellStockOrder);

$broker->placeOrders();