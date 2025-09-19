<?php

namespace iutspotify\Entity;

require_once 'AudioTrack.php';
require_once 'AudioList.php';

class Album extends AudioList
{
    protected array $tracks;

    public function __construct(protected string $name, public string $artist, public DateTime $date, AudioTrack ...$tracks)
    {
        parent::__construct($name, ...$tracks);
    }

    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }
}