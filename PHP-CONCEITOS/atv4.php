<?php
/*Escreva um script PHP que solicita ao usuário uma série de números inteiros
até que ele digite um valor específico (por exemplo, -1) para parar a entrada.
O script deve então determinar e exibir o maior e o menor número digitado
pelo usuário class*/

echo "Escreva números inteiros (digite -1 para parar):";
$numeros = [];
while(true){
    $select = trim(fgets(STDIN));
    if ($select == -1){
        break;
    }
    $numeros[]=$select;
}
if (count($numeros)>0){
    $maior= max($numeros);
    $menor= min($numeros);
    echo "Maior número digitado:$maior".PHP_EOL;
    echo "Menor número digitado:$menor";
}