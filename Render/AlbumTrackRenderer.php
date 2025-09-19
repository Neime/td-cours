<?php
require_once 'AudioTrackRenderer.php';
class AlbumTrackRenderer extends  AudioTrackRenderer {


    public function __construct(public AlbumTrack $track)
    {
    }

    protected function  compact(): string
    {
        return $this->track->title;
    }

    protected function long(): string
    {
        return sprintf('%s by %s', $this->track->title, $this->track->artist);
    }
}