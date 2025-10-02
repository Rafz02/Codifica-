<?php
//solicite um o nome e exiba "Olá, [nome]!"

echo 'Digite seu nome:';
$nome = trim(fgets(STDIN));
echo "Olá, $nome!";