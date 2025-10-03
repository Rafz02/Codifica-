<?php 

echo "Este programa vai converter temperaturas de Celsius para Fahrenheit e vice-versa. Está afim de utilizar? venha!" . PHP_EOL;

do {
    echo "Escolha uma temperatura: digite 'C' para Celsius ou 'F' para Fahrenheit (ou 'S' para sair): ";
    $escolha = trim(fgets(STDIN));
    
    if ($escolha == 'C') {
        echo "Digite a temperatura em Celsius: ";
        $temperaturaCelsius = floatval(trim(fgets(STDIN)));
        $temperaturaFahrenheit = ($temperaturaCelsius * 9/5) + 32;
        echo "Temperatura em Fahrenheit: " . number_format($temperaturaFahrenheit, 2) . "°F" . PHP_EOL;
    } elseif ($escolha == 'F') {
        echo "Digite a temperatura em Fahrenheit: ";
        $temperaturaFahrenheit = floatval(trim(fgets(STDIN)));
        $temperaturaCelsius = ($temperaturaFahrenheit - 32) * 5/9;
        echo "Temperatura em Celsius: " . number_format($temperaturaCelsius, 2) . "°C" . PHP_EOL;
    } elseif ($escolha == 'S') {
        echo "Fechado, meu cria" . PHP_EOL;
        break;
    } else {
        echo "Opção inválida. Escolha 'C' para Celsius, 'F' para Fahrenheit ou 'S' para sair." . PHP_EOL;
    }
} while (true);
