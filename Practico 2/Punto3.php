<?php


$a = readline("ingrese su primer valor:");
$b = readline("ingrese su segundo valor:");
$c = readline("ingrese su tercer valor:");

$numeros = [$a, $b, $c];

sort($numeros, SORT_NUMERIC);

var_dump($numeros);