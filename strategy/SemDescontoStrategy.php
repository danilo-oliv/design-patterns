<?php

require_once("IDesconto.php");

/**
 * Implementação concreta da estratégia
 */
class SemDescontoStrategy implements IDesconto {

    public function aplicarDesconto(float $precoOriginal) : float{
        return $precoOriginal;
    }

}