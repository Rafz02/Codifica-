<?php
/*
Você foi contratado para desenvolver um sistema que gerencie os funcionários de uma
empresa e seus respectivos salários. Considere as seguintes informações:
Dados dos Funcionários:
● Funcionário 1: Pedro
○ Salário Base: R$ 2500,00
○ Horas Extras: 10
● Funcionário 2: Renata
○ Salário Base: R$ 3000,00
○ Horas Extras: 5
● Funcionário 3: Sérgio
○ Salário Base: R$ 2800,00
○ Horas Extras: 8
● Funcionário 4: Vanessa
○ Salário Base: R$ 3200,00
○ Horas Extras: 12
● Funcionário 5: André
○ Salário Base: R$ 1700,00
○ Horas Extras: Não tem
Nota: Armazene os dados dos funcionários em um array
Com base nas informações acima, aqui está o que o programa deve fazer:
Funções para implementar:
1. calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra)
a. Recebe o salário base, as horas extras e o valor da hora extra.
b. Retorna o salário total do funcionário.
2. listarFuncionarios($funcionarios)
a. Imprime todos os funcionários e suas respectivas informações (nome, salário
base, horas extras, salário total).
Procedimentos:
1. Imprimir a lista inicial de funcionários, salários base e horas extras.
2. Calcular o salário total de cada funcionário, considerando que o valor da hora extra é
1,5 vezes o valor da hora normal.
3. Imprimir o salário total de cada funcionário.
Nota: Considere 160 horas trabalhadas por mês ao calcular o valor da hora normal
*/

$funcionarios = [
    ["nome" => "Pedro", "salarioBase" => 2500.00, "horasExtras" => 10],
    ["nome" => "Renata", "salarioBase" => 3000.00, "horasExtras" => 5],
    ["nome" => "Sérgio", "salarioBase" => 2800.00, "horasExtras" => 8],
    ["nome" => "Vanessa", "salarioBase" => 3200.00, "horasExtras" => 12],
    ["nome" => "André", "salarioBase" => 1700.00, "horasExtras" => 0]
];

function calcularSalarioTotal($salarioB, $horasExtras, $valorHExtra) {
    $salarioT = $salarioB + ($horasExtras * $valorHExtra);
    return $salarioT;
}
$valorHExtra = 50.00;
foreach ($funcionarios as $funcionario) {
    $salarioTotal = calcularSalarioTotal($funcionario["salarioBase"], $funcionario["horasExtras"], $valorHExtra);
    echo "Funcionário: " . $funcionario["nome"] . "\n";
    echo "Salário Base: " . number_format($funcionario["salarioBase"], 2, ',', '.') . "\n";
    echo "Horas Extras: " . $funcionario["horasExtras"] . "\n";
    echo "Salário Total: " . number_format($salarioTotal, 2, ',', '.') . "\n";
}