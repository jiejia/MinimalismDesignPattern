<?php
namespace Mediator;

require_once "../autoload.php";

$robert = new User("Robert");

$john = new User("John");

$robert->sendMessage("Hi! John!");
$john->sendMessage("Hello! Robert!");