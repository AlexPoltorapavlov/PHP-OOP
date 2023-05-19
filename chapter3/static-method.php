<?php

require_once 'Connections.php';

print Connection::getCount() . PHP_EOL; // output is 0

$object1 = new Connection();

print Connection::getCount() . PHP_EOL; // output is 1

$object2 = new Connection();

print Connection::getCount() . PHP_EOL; // output is 2