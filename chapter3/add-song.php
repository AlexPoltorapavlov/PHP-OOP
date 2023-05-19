<?php

require_once 'Playlist.php';
require_once 'Song.php';

$NoizemcSongs = new Playlist();

$yesFuture = new Song('Noize MC', 1);
$fakeSong = "this is not a song, this is a fucking string";

$NoizemcSongs->addSong($yesFuture);
// $NoizemcSongs->addSong($fakeSong); //make error
$fakeSong = new Song('Noize MC', 2);

$NoizemcSongs->addSong($fakeSong);

var_dump($NoizemcSongs->getSongs());