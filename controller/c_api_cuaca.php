<?php

require_once "../api/api_cuaca.php";

$obj_cuaca = new Api_cuaca();

$hsl = $obj_cuaca->getCuacaHour();

echo $hsl;

?>