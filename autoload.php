<?php
spl_autoload_register(function($class_name){
    echo realpath('./' . $class_name . ".php");
//    require realpath('./' . $class_name . ".php");
});