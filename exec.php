<?php

require_once 'Entity/AlbumTrack.php';
require_once 'Entity/PodcastTrack.php';
require_once 'Render/AlbumTrackRenderer.php';
require_once 'Render/PodcastTrackRenderer.php';
require_once 'Render/AudioListRenderer.php';
require_once 'Render/RenderInterface.php';
require_once 'Entity/Playlist.php';

$track = new AlbumTrack('Song Title', 'Artist Name');
$podcast = new PodcastTrack('Podcast Title', 'Author Name');
$albumRender = new AlbumTrackRenderer($track);
$podcastRender = new PodcastTrackRenderer($podcast);
/*
echo $albumRender->render(RenderInterface::COMPACT);
echo PHP_EOL;
echo $podcastRender->render(RenderInterface::LONG);

$playlist = new Playlist('My Playlist', ...[$track, $podcast]);

echo PHP_EOL;
echo $playlist->getDuration();
echo PHP_EOL;
echo $playlist->getTrackCount();
echo PHP_EOL;
echo '--Remove Podcast';
$playlist->removeTrack($podcast);
echo PHP_EOL;
echo $playlist->getTrackCount();
echo PHP_EOL;
echo '--Add Podcast';
$playlist->addTrack($podcast);
echo '--Add Same Podcast';
$playlist->addTrack($podcast);
echo PHP_EOL;
echo $playlist->getTrackCount();
echo PHP_EOL;*/


$playlist = new Playlist('My Playlist', ...[$track, $podcast]);
$render = new AudioListRenderer($playlist);
echo $render->render();