<?php

require_once("Conteudo.php");

class Podcast extends Conteudo {
    private $nome;

    public function __construct($nome, IDispositivo $dispositivo) {
        parent::__construct($dispositivo);
        $this->nome = $nome;
     }

    public function play(){
        $this->dispositivo->playConteudo('Podcast '.$this->nome);
    }


}