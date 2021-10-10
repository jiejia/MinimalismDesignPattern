<?php
namespace State;

require_once "../autoload.php";

$context = new Context();

$startState = new StartState();
$startState->doAction($context);
echo $context->getState();

$stopState = new StopState();
$stopState->doAction($context);
echo $context->getState();