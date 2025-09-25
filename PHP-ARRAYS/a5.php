<?php


function sim($altura, $peso) {
     $valorSim = $peso / ($altura * $altura);
     if ($valorSim < 18.5) {
         return "Tá fino em compadi";
     } else if ($valorSim >= 18.5 && $valorSim <= 24.9) {
         return "peso ideal meu jovem";
     } else if ($valorSim >= 25 && $valorSim <= 29.9) {
         return "Ta meio inchado";
     } else if ($valorSim >= 30 && $valorSim <= 34.9) {
         return "Ta gordo, mas a camisa cobre";
     } else if ($valorSim >= 35 && $valorSim <= 39.9) {
         return "Já pode sair rolando";
     } else if ($valorSim >= 40) {
         return "Como vc continua vivo?";
     }
 }
 
 $peso = readline ("Qual seria o seu peso?");
 $altura = readline("Qual seria a sua altura?");
 $valorSim = sim($altura, $peso);
 
 echo $valorSim;
