<?php
//Solicite ano de nascimento e calcule a idade do usuário.

echo 'Digite o ano de nascimento para calcular a sua idade:';
$ano = trim(fgets(STDIN));
$sub = 2025 - $ano;
echo "Sua idade atual é: $sub";