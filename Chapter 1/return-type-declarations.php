<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Jojo', 50);
$song2 = new Song('Mine', 12);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10)
{
    print 'Short playlist'. PHP_EOL;
}