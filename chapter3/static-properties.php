<?php

require_once 'ClassWhithStatic.php';

$object1 = new StaticProperty();
print $object1::$count . PHP_EOL; // 1

$object2 = new StaticProperty();
print $object2::$count . PHP_EOL; // 2

$object2::$count = 20;
print $object2::$count . PHP_EOL; // 20

$object3 = new StaticProperty();
print $object2::$count . PHP_EOL; // 21