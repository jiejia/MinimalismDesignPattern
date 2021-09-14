<?php
spl_autoload_register(function($class_name){
    $class_name = str_replace('\\', '/', $class_name);
    require dirname(__FILE__) . '/' . $class_name . '.php';
});