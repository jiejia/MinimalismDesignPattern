<?php
namespace Memento;

require_once "../autoload.php";

$originator = new Originator();
$careTaker = new CareTaker();

$originator->setState("State #1");
$originator->setState("State #2");
$careTaker->add($originator->saveToMemento());
$originator->setState("State #3");
$careTaker->add($originator->saveToMemento());
$originator->setState("State #4");

echo "Current State: " . $originator->getState() . "\n";
$originator->getStateFromMemento($careTaker->get(0));
echo "First State: " . $originator->getState() . "\n";
$originator->getStateFromMemento($careTaker->get(1));
echo "Second State: " . $originator->getState() . "\n";