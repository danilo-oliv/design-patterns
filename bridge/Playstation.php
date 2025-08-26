<?php

require_once("IDispositivo.php");

class Playstation implements IDispositivo {

    public function playConteudo($conteudo){
        echo "Tocando $conteudo no Playstation";
    }
}