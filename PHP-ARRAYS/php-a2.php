<?php
/*Crie um programa que calcule a área e o perímetro de um retângulo. O programa deve
solicitar ao usuário a largura e a altura do retângulo, e então exibir os resultados.*/

echo "Digite a largura do retângulo:";
$larRetangulo = trim(fgets(STDIN));
echo "Digite a altura do retângulo:";
$altRetangulo = trim(fgets(STDIN));
$area = $larRetangulo * $altRetangulo;
$perimentro = 2 * ($larRetangulo + $altRetangulo);
echo "O resultado da área é $area:\n";
echo "O resultado do perimentro é $perimentro:";