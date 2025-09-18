<?php
//Solicite dois números e exiba a soma.

echo 'Digite dois numeros para saber a soma:';
$numero1 = trim(fgets(STDIN));
$numero2 = trim(fgets(STDIN));
$soma = $numero1 + $numero2;
echo "O resultado é: $soma";

