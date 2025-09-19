<?php

require_once 'AudioTrack.php';

class AlbumTrack extends AudioTrack {
    public string $artist;
    public function __construct(public string $title, string $artist)
    {
        parent::__construct($title);
        $this->artist = $artist;
    }

}