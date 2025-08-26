<?php

require_once("Smartphone.php");
require_once("Playstation.php");

require_once("Musica.php");
require_once("Podcast.php");

$android = new Smartphone();
$playstation = new Playstation();

$musica = new Musica("Jump", $android);

$podcast = new Podcast("Unipam News", $playstation);
