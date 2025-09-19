<?php

require_once 'src/classes/Entity/AlbumTrack.php';
require_once 'src/classes/Entity/PodcastTrack.php';
require_once 'src/classes/Render/AlbumTrackRenderer.php';
require_once 'src/classes/Render/PodcastTrackRenderer.php';
require_once 'src/classes/Render/AudioListRenderer.php';
require_once 'src/classes/Render/RenderInterface.php';
require_once 'src/classes/Entity/Playlist.php';

use iutspotify\Entity\AlbumTrack;
use iutspotify\Entity\Playlist;
use iutspotify\Entity\PodcastTrack;
use iutspotify\Render\AlbumTrackRenderer;
use iutspotify\Render\AudioListRenderer;
use iutspotify\Render\PodcastTrackRenderer;

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