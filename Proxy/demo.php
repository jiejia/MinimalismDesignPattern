<?php
namespace Proxy;

require_once "../autoload.php";

$image = new ProxyImage("test_image.jpg");

$image->display();
echo "\n";
$image->display();