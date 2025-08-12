<?php

require_once("IDesconto.php");

/**
 * Implementação concreta da estratégia
 */
class DescontoNatalStrategy implements IDesconto {

    public function aplicarDesconto(float $precoOriginal) : float{
        return $precoOriginal * 0.7;
    }

}