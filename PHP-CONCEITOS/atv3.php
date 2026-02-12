<?php
/*Escreva um código PHP que solicita ao usuário dois números inteiros, a e b,
e calcula a soma de todos os números ímpares no intervalo [a, b] (inclusive).
Certifique-se de que a seja menor ou igual a b. Se a for maior que b, solicite
ao usuário que insira novamente os valores.*/

function numero($mensagem){
    echo $mensagem;
    return trim(fgets(STDIN));
}

do{
    $a = numero("Digite o número a:");
    $b = numero("Digite o número b:");
    if ($a > $b) {
        echo "O número a tem que ser menor ou igual a b, tente novamente";
    }
} while ($a > $b);
$soma = 0;
for ($i = $a; $i <= $b; $i++){
    if ($i % 2 !== 0){
        $soma += $i;
    }
}
echo "A soma dos números impares entre $a e $b é igual: $soma";