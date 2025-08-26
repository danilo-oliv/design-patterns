<?php

require_once("Conteudo.php");

class Musica extends Conteudo {
    private $titulo;

    public function __construct($titulo, IDispositivo $dispositivo) {
        parent::__construct($dispositivo);
        $this->titulo = $titulo;
     }

    public function play(){
        $this->dispositivo->playConteudo('Musica '.$this->titulo);
    }


}