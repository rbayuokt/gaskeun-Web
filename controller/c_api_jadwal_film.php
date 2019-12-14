<?php

require_once "autoload.php";

$obj_film = new Api_info_film();

$tempat = $_POST['v_lokasi_bioskop'];

$hsl = $obj_film->getJadwalBioskop($tempat);

echo $hsl;

?>