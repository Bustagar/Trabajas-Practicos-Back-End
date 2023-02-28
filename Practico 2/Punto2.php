<?php



$carrera1 = "vespertino";
$carrera2 = "diurno";
$carrera = readline("ingrese su turno:");
$nota = readline("ingrese su nota:");

if ($nota >= 6 && $carrera != $carrera2) {
    echo "Se exime";
} else if ($nota >= 3.5) {
    echo "Rinde examen";
} else {     
    echo "Reprueba";
}