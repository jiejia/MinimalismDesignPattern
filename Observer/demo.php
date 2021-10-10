<?php
namespace Observer;

require_once "../autoload.php";

$subject = new Subject();

new HexObserver($subject);
new OctalObserver($subject);
new BinaryObserver($subject);

echo "First state change: 15\n";
$subject->setState(15);
echo "Second state change: 10\n";
$subject->setState(10);