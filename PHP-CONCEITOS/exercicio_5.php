<?php
//Informe se um número digitado pelo usuário é par ou ímpar

echo 'Digite um número para saber se ele é impar:';
$numero = trim(fgets(STDIN));
if ($numero %2 !=0) {
    echo "O número é impar";
}else {
   echo "Ops o número é par";
}
