<?php
//Solicite ao usuário para escolher um número e mostre a tabuada dele (1 ao 10).

echo "Solicite um número para saber a tabuada de 1 ao 10:";
$numero = trim(fgets(STDIN));
for ($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo $resultado .PHP_EOL;
}
