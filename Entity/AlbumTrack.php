<?php

require_once 'AudioTrack.php';

class AlbumTrack extends AudioTrack {
    protected string $artist;
    public function __construct(protected string $title, string $artist)
    {
        parent::__construct($title, 20);
        $this->artist = $artist;
    }


}