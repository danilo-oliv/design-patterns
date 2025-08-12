<?php

require_once("Carrinho.php");
require_once("DescontoNatalStrategy.php");

$carrinho = new Carrinho();

$precoOriginal = 100;

$carrinho->setEstrategiaDesconto(new DescontoNatalStrategy());

$precoComDesconto = $carrinho->getPrecoFinal($precoOriginal);
echo "Preço final: $precoComDesconto";


