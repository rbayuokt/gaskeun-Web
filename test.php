<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>

<form action="controller/c_api_info_film.php?getInfoFilm" method="POST">
    <input type="text" name="judul_film" id="" />
    <input type="submit" name="btnLihat" value="Lihat" />
</form>

</body>
</html> -->

<?php

require_once "api/api_cuaca.php";
$obj_cuaca = new Api_cuaca();

$hsl = $obj_cuaca->getCuacaHour();

echo $hsl;

?>