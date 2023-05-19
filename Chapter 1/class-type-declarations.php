<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playList = new Playlist();

$song1 = new Song("Jatva", 1);
$song2 = new Song("Vi theme", 24);

$playList->addSong($song1);
$playList->addSong($song2);

foreach($playList->songs as $song)
{
    print $song->name."\n";
}

