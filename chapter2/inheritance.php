<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('Some Name', 'Some author', 1000, 300);
$digitalBook = new DigitalBook('Some Name', 'Some author', 5000, 1024);

var_dump($digitalBook->print(). PHP_EOL);
var_dump($physicalBook->print(). PHP_EOL);
die();