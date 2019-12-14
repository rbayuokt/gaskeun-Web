<?php

class Api_cuaca{

    private $key_cuaca;

    public function __construct(){
        $this->key_cuaca = "27e6e08fb1c240c4b8606e7cd04f4144";
    }

    public function getCuacaHour(){
        $api_cuaca = "https://api.weatherbit.io/v2.0/forecast/hourly?city=Bandung,ID&key=".$this->key_cuaca."&hours=24";
        $response = file_get_contents($api_cuaca);
        
        return $response;
    }

}

?>