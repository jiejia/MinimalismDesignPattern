<?php
namespace Iterator;

require_once "../autoload.php";

$nameRepository = new NameRepository();

for ($i = $nameRepository->getIterator(); $i->hasNext();) {
    $name = $i->next();
    echo "Name : " . $name . "\n";
}