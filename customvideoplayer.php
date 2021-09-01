<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Video Player</title>
    <link rel="stylesheet" href="css/customvideoplayer-styles.css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include 'includes/menu.php';?>
<div class="body1">
<div class="player">
    <video class="player__video viewer" src="652333414.mp4"></video>

    <div class="player__controls">
        <div class="progress">
            <div class="progress__filled"></div>
        </div>
        <button class="player__button toggle" title="Toggle Play">►</button>
        <input type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
        <input type="range" name="playbackRate" class="player__slider" min="0.5" max="2" step="0.1" value="1">
        <button data-skip="-10" class="player__button">« 10s</button>
        <button data-skip="10" class="player__button">10s »</button>
    </div>
</div>
</div>
<script src="js/customvideoplayer-script.js"></script>
</body>
</html>
