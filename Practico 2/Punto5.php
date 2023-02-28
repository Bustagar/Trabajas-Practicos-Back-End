<?php

$dia = readline("Ingrese se dia de nacimiento:");
$mes = readline("Ingrese su mes de nacimiento:");
$año = readline("Ingrese su año de nacimiento:");

if ($dia > 0 && $dia < 31) {
} else {
    echo "Dia invalido";
}
if ($año > 2000){
}else {
    echo "Año invalido";
}

if ($mes == 1) {
    echo "Enero";
} elseif ($mes == 2) {
    echo "Febrero";
} elseif ($mes == 3) {
    echo "Marzo";
} elseif ($mes == 4) {
    echo "Abril";
} elseif ($mes == 5) {
    echo "Mayo";
} elseif ($mes == 6) {
    echo "Junio";
} elseif ($mes == 7) {
    echo "Julio";
} elseif ($mes == 8) {
    echo "Agosto";
} elseif ($mes == 9) {
    echo "Septiembre";
} elseif ($mes == 10) {
    echo "Octubre";
} elseif ($mes == 11) {
    echo "Noviembre";
} elseif ($mes == 12) {
    echo "Diciembre";
} elseif ($mes > 12) {
    echo "Mes invalido";
}

var_dump($dia + $mes + $año);