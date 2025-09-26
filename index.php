<?php

$body = '';

// if get show a form with name and adress
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $body = '<form method="POST" action="">
<h1>Add track</h1>
            <label for="playlist">Playlist:</label>
            <select name="playlist" id="playlist">
                <option value="playlist1">Playlist 1</option>
                <option value="playlist2">Playlist 2</option>
                <option value="playlist3">Playlist 3</option>
            </select>
            <br>
            <label for="track">Track:</label>
            <input type="text" id="track" name="track" required>
            <input type="submit" value="Submit">
          </form>';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playlist = $_POST['playlist'] ?? '';
    $track = $_POST['track'] ?? '';

    if (empty($playlist) || empty($track)) {
        $body = '<p style="color:red;">Please fill in all fields.</p>';
    } else {
        $body = sprintf('<p style="color:green;">Track "%s" added to playlist "%s".</p>', htmlspecialchars($track), htmlspecialchars($playlist));
    }

    // add a link to go back to the form
    $body .= '<p><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">Add another track</a></p>';
}

// renvoi html avec un sprint qui continuer la response, avec body etc
echo sprintf(
    '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>IUT - spotify</title></head><body>%s</html>',
    $body
);
