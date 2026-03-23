<?php

$altura = 1.70;

$peso = 70;


$imc = $peso/ ($altura * $altura);

if ($imc <= 16) {echo "Seu IMC é: magreza grau III";}

elseif ($imc >= 16 && $imc <= 16.9) {echo "Seu IMC é: magreza grau II";}

elseif ($imc >= 17 && $imc <= 18.4) {echo "Seu IMC é: magreza grau I";}

elseif ($imc >= 18.5 && $imc <= 24.9) {echo "Seu IMC é: normal";}

elseif ($imc >= 25 && $imc <= 29.9) {echo "Seu IMC é: pré-obesidade";}

elseif ($imc >= 30 && $imc <= 34.9) {echo "Seu IMC é: Obesidade Grau I";}

elseif ($imc >= 35 && $imc <= 39.9) {echo "Seu IMC é: Obesidade Grau II";}

else{{echo "Seu IMC é: Obesidade Grau III";}}

?>