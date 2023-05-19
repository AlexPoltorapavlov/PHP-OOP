<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';

$book1 = new PhysicalBook('Hamlet', 'Shakespeare', 500, 300);
print $book1->write().PHP_EOL; // output is "Hamlet, weight: 300"