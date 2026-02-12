<?php
//Solicite ao usuário 2 números e informe qual é o maior entre eles.

echo "Solicite um numero para saber qual é maior:";
$numero1 = trim(fgets(STDIN));
echo "Solicite o segundo número:";
$numero2 = trim(fgets(STDIN));
if ($numero1 > $numero2) {
echo "O número $numero1 é maior";
}
else {
    echo "O número $numero2 é maior";
}