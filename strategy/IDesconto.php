<?php

interface IDesconto {
    public function aplicarDesconto(float $precoOriginal): float;
}
