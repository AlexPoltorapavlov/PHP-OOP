<?php

// it is like include, but it is return fatal error 
// if you have some problems with libruary
require_once 'Song.php';

/**it will be error, because $name must be string and
 * $numberOfPlays must be integer
 */
# $song = new Song(['a', 'song'], 'Number of a song');
$song = new Song('a song', 14);
var_dump($song->name."\t".$song->numberOfPlays);
die();