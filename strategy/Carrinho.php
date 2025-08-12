<?php

require_once("IDesconto.php");

/**
 * Classe contexto que utiliza a estratégia
 */
class Carrinho {
    private IDesconto $estrategiaDesconto;

    public function setEstrategiaDesconto(IDesconto $estrategia) : void {
        $this->estrategiaDesconto = $estrategia;
    }

    public function getPrecoFinal(float $preco) : float {
        return $this->estrategiaDesconto->aplicarDesconto($preco);
    }
}