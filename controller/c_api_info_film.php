<?php

require_once "autoload.php";

$obj_film = new Api_info_film();

$judul_film = $_POST['judul_film'];

$hsl = $obj_film->getInfoFilm($judul_film);

echo $hsl;

?>