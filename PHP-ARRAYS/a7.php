<?php
/*Você está organizando um churrasco com amigos e precisa dividir os custos
igualmente entre todos. Sua tarefa é criar um programa que calcule quanto cada pessoa deve
pagar com base nos itens comprados e no número de participantes. Aqui está o que o
programa deve fazer:
1. Crie um array para armazenar os itens comprados no churrasco e outro array para
armazenar o preço de cada item.
2. Solicite número total de participantes do churrasco.
3. Crie uma função que receba o valor total dos itens e o número de participantes como
parâmetros, e retorne o valor que cada pessoa deve pagar.
4. Após calcular o valor que cada pessoa deve pagar, imprima o resultado, indicando
quanto cada uma deve contribuir para o churrasco.
5. Imprima qual foi o item mais caro do churrasco*/


$itensComprados = ["Linguiça ceara", "Cerveja samba", "carvão vencido", "refrigerante UAI", "Calne di Gatò"];
$valorItems = [18.99, 0.67, 17.22, 4.99, 13.5];

function calcularDivisao($convidados, $valorItems) {
    $valorTotal = array_sum($valorItems);
    $valorPago = $valorTotal / $convidados;
    return $valorPago;
}

$convidados = readline("Quantidade de convidados: ");

if ($convidados > 1) {
    $valorAPagar = calcularDivisao($convidados, $valorItems);
    echo "O valor que cada um vai pagar é:" . number_format($valorAPagar, 2, ',', '.') . "\n";

    $maiorValor = max($valorItems);
    $indiceMaior = array_search($maiorValor, $valorItems);
    $itemMaisCaro = $itensComprados[$indiceMaior];

    echo "O item mais caro é: $itemMaisCaro (" . number_format($maiorValor, 2, ',', '.') . ")\n";
} else {
    echo "Role virou lost mídia, it's over.\n";
}
?>
