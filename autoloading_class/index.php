<?php 
// Autoloading Class

spl_autoload_register( function($class_name) {
    include $class_name.'.php';
});

$obj = new Class1();
$obj2 = new Class2();
?>