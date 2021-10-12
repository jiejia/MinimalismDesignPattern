<?php
namespace Visitor;

require_once "../autoload.php";

$computer = new Computer();
$computer->accept(new ComputerPartDisplayVisitor());