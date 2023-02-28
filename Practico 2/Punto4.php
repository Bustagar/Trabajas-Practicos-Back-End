<?php

$a = readline("ingrese su primer valor:");
$b = readline("ingrese su segundo valor:");
$c = readline("ingrese su tercer valor:");

if ($a == $b && $b == $c) {
    echo "Es un triágulo Equilatero";
} elseif ($a !== $b && $b !== $c && $c !== $a) {
    echo "Es un triágulo Escaleno";
} else {
    echo "Es un triángulo Isósceles";
}