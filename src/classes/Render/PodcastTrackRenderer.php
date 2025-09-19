<?php

namespace iutspotify\Render;

use iutspotify\Entity\PodcastTrack;

require_once 'RenderInterface.php';
require_once 'AudioTrackRenderer.php';
require_once 'src/classes/Entity/PodcastTrack.php';

class PodcastTrackRenderer extends AudioTrackRenderer
{

    public function __construct(private PodcastTrack $track)
    {
    }

    protected function compact(): string
    {
        return $this->track->title;
    }

    protected function long(): string
    {
        return sprintf('%s by %s', $this->track->title, $this->track->author);
    }
}