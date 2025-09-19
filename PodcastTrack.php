<?php

require_once 'AudioTrack.php';

class PodcastTrack extends AudioTrack {
    public string $author;
    public function __construct(public string $title, string $author)
    {
        parent::__construct($title);
        $this->author = $author;
    }

}