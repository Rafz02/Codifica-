<?php

// tenta dar um desconto ai
function aplicarDesconto($valor, $porcento) {
    $desconto = ($valor * $porcento) / 100;
    return $valor - $desconto;
}

function calcularDescontoProgressivo($valor) {
    if ($valor < 100) {
        return 0;
    } else if ($valor >= 100 && $valor <= 500) {
        return 10;
    } else {
        return 20;
    }
}

$valorCompra = readline("Valor da compra: ");

$desconto = calcularDescontoProgressivo($valorCompra);
$valorFinal = aplicarDesconto($valorCompra, $desconto);

echo "Valor original: $valorCompra\n";
echo "Desconto: $desconto%\n";
echo "Valor com desconto: $valorFinal\n";


