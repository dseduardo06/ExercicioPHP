<?php

$peso = 75;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Sobrepeso";
} elseif ($imc >= 30) {
    echo "Obesidade";
}

?>