<?php

require_once 'Song.php';

$melody = new Song('unknown', 4);

// $melody->setRating('Ohuennaya pesnya'); //it is error
$melody->setRating(3.7);

var_dump($melody->getRating());
die();