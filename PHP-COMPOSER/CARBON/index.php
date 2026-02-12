<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$dataNasc = Carbon::createFromDate(2006, 5, 3);
$hoje = Carbon::now();

$niverdoAno = Carbon::create($hoje->year, $dataNasc->month, $dataNasc->day);
if ($niverdoAno->isPast()) {
    $niverdoAno->addYear();
}

$daystoNiver = $hoje->diffInDays($niverdoAno);
$idade = $hoje->diffInYears($dataNasc);
$diasDVida = $hoje->diffInDays($dataNasc);
$diaSemNasc = $dataNasc->locale('pt_BR')->isoFormat('dddd');

echo "Faltam $daystoNiver dias para o seu próximo aniversário." . PHP_EOL;
echo "Você tem $idade anos de vida." .PHP_EOL;
echo "Você viveu $diasDVida dias até hoje." . PHP_EOL;
echo "Você nasceu em uma $diaSemNasc." . PHP_EOL;