<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<script src="node_modules/angular/angular.min.js"></script>
<script src="node_modules/angular-sanitize/angular-sanitize.min.js"></script>
<script src="node_modules/videogular/dist/videogular/videogular.js"></script>
<script src="node_modules/videogular/dist/controls/vg-controls.js"></script>
<script src="node_modules/videogular/dist/overlay-play/vg-overlay-play.js"></script>
<script src="node_modules/videogular/dist/poster/vg-poster.js"></script>
<script src="node_modules/videogular/dist/buffering/vg-buffering.js"></script>
<script src="js/main.js"></script>

<div ng-app="myApp">
    <div ng-controller="HomeCtrl as controller" class="videogular-container">
        <videogular vg-theme="controller.config.theme">
            <vg-media vg-src="controller.config.sources"
                      vg-tracks="controller.config.tracks">
            </vg-media>

            <vg-controls>
                <vg-play-pause-button></vg-play-pause-button>
                <vg-time-display>{{ currentTime | date:'mm:ss' }}</vg-time-display>
                <vg-scrub-bar>
                    <vg-scrub-bar-current-time></vg-scrub-bar-current-time>
                </vg-scrub-bar>
                <vg-time-display>{{ timeLeft | date:'mm:ss' }}</vg-time-display>
                <vg-volume>
                    <vg-mute-button></vg-mute-button>
                    <vg-volume-bar></vg-volume-bar>
                </vg-volume>
                <vg-fullscreen-button></vg-fullscreen-button>
            </vg-controls>

            <vg-overlay-play></vg-overlay-play>
            <vg-poster vg-url='controller.config.plugins.poster'></vg-poster>
        </videogular>
    </div>
</div>
</body>
</html>