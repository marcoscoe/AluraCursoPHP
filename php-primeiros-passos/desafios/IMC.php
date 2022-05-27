<?php

$peso = 100;
$altura = 1.80;

$imc = $peso / $altura ** 2;

if ($imc > 18.5 && $imc < 24.9) {
    echo "Normal";
} else if ($imc > 25 && $imc < 29.9) {
    echo "Sobrepeso";
} else if ($imc > 30 && $imc < 40) {
    echo "Obesidade";
} else if ($imc < 18.4) {
    echo "Abaixo";
} else {
    echo "Obesidade grave";
}