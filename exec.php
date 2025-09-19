<?php

require_once 'AlbumTrack.php';
require_once 'PodcastTrack.php';
require_once 'AlbumTrackRenderer.php';
require_once 'PodcastTrackRenderer.php';
require_once 'RenderInterface.php';

$track = new AlbumTrack('Song Title', 'Artist Name');
$podcast = new PodcastTrack('Podcast Title', 'Author Name');
$albumRender = new AlbumTrackRenderer($track);
$podcastRender = new PodcastTrackRenderer($podcast);

echo $albumRender->render(RenderInterface::COMPACT);
echo PHP_EOL;
echo $podcastRender->render(RenderInterface::LONG);