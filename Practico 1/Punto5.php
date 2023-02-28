<?php


$a = 10;
$b = 12;
$c = 13;
$d = 10;

$result = (($a > $b) || ($a < $c)) && (($a = $c) || ($a >= $b));

var_dump($result); //bool(true)

$resultado = (($a >= $b) || ($a < $d)) && (($a >=$d) && ($c > $d)); 

var_dump($resultado); //bool(true)

var_dump(!($a = $c) && ($c >$b)); //bool(false)