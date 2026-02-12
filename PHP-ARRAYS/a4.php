<?php
/*Você está desenvolvendo um sistema de compras online e precisa calcular o valor final de
um produto com desconto. Sua tarefa é criar uma função que receba o valor original do
produto e a porcentagem de desconto como parâmetros, e retornar o valor final com o
desconto aplicado. Aqui está o que o programa deve fazer*/

echo "Loja online";
function desconto($valor, $porcetagem){
    $valord = ($porcetagem / 100) * $valor;
    $valorfn = $valor - $valord;
    return $valorfn;
}
$valor = readline("valor:");
$porcetagem = readline("desconto:");
$valorfn = desconto($valor, $porcetagem);
echo $valorfn;