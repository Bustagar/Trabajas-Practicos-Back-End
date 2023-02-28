<?php

$a = 20;
$b = $a;
$c = 15;
$d = 10;


$result = (($a = $b )|| ($b > $c )) || ($c < $d);

var_dump($result); //bool(true)


