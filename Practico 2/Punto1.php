<?php


$numero = readline("ingrese su numero:");

if ($numero > 0 && $numero % 2 == 0) {
    echo "Es Positivo y es Par";
} elseif ($numero > 0 && $numero % $numero == 0) {
    echo "Es Positivo y es Impar";
} elseif ($numero < 0 && $numero % 2 == 0) {
    echo "Es Negativo y es Par";
} elseif ($numero < 0 && $numero % $numero == 0) {
    echo "Es Negativo y es Impar";
} else {
    echo "Es 0";
}