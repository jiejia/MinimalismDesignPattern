<?php
namespace Interpreter;

require_once "../autoload.php";

$robert = new TerminalExpression("Robert");
$john = new TerminalExpression("John");
$isMale = new OrExpression($robert, $john);


$julie = new TerminalExpression("Julie");
$married = new TerminalExpression("Married");
$isMarriedWomen = new AndExpression($julie, $married);

echo "John is male? " . (string)$isMale->interpret("John") . "\n";
echo "Julie is a married women? " . (string)$isMarriedWomen->interpret("Married Julie") . "\n";