<?php
namespace Template;

require_once "../autoload.php";

$game = new Cricket();
$game->play();
echo "\n";
$game = new Football();
$game->play();