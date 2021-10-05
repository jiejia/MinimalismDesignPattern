<?php
namespace Composite;

require_once "../autoload.php";

$CEO = new Employee("John", 'CEO', 30000);
$headSales = new Employee("Robert", "Head Sales", 20000);
$headMarketing = new Employee("Michel", "Head Marketing", 20000);

$clerk1 = new Employee("Laura", "Marketing", 10000);
$clerk2 = new Employee("Bob", "Marketing", 10000);

$salesExecutive1 = new Employee("Richard", "Sales", 10000);
$salesExecutive2 = new Employee("Rob", "Sales", 10000);

$CEO->add($headSales);
$CEO->add($headMarketing);

$headSales->add($salesExecutive1);
$headSales->add($salesExecutive2);

$headMarketing->add($clerk1);
$headMarketing->add($clerk2);

echo $CEO;
foreach ($CEO->getSubordinates() as $v) {
    echo $v;
    foreach ($v->getSubordinates() as $val) {
        echo $val;
    }
}