<?php

require_once("IDispositivo.php");
abstract class Conteudo {

    protected IDispositivo $dispositivo;

    public function __construct(IDispositivo $dispositivo) {
        $this->dispositivo = $dispositivo;
    }

    public abstract function play();
}