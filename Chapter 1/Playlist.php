<?php

class Playlist
{
    public $songs = [];

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }

    public function getLength(): int // what type function is return
    {
        return count($this->songs);
    }
}