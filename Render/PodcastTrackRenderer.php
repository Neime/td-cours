<?php

require_once 'RenderInterface.php';
require_once 'AudioTrackRenderer.php';
class PodcastTrackRenderer extends AudioTrackRenderer {

    public function __construct(public PodcastTrack $track)
    {
    }

    protected function  compact(): string
    {
        return $this->track->title;
    }

    protected function long(): string
    {
        return sprintf('%s by %s', $this->track->title, $this->track->author);
    }
}