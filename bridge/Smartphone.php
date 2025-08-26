<?php

require_once("IDispositivo.php");

class Smartphone implements IDispositivo {

    public function playConteudo($conteudo){
        echo "Tocando $conteudo no Android";
    }
}