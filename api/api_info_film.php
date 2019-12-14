<?php

class Api_info_film{

    private $key_film;

    public function __construct(){
        $this->key_film = "Eq4uz3wDO3Xy834AvpH3vXsus";
    }

    public function getInfoFilm($judul_film){
        $api_film = "http://api.farzain.com/film.php?id=".rawurlencode($judul_film)."&apikey=".$this->key_film."";
        $response = file_get_contents($api_film);
        // $res = json_decode($response);
        
        return $response;
    }

    public function getJadwalBioskop($tempat){
        $api_jadwal = "http://api.farzain.com/special/bioskop/bioskop_result.php?apikey=".$this->key_film."&id=https://jadwalnonton.com/bioskop/di-bandung/".$tempat.".html";
        $response = file_get_contents($api_jadwal);
        return $response;
    }

}

?>