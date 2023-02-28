<?php


$m = 8;
$n = 9;
$r = 5;
$s = 5;
$t = 4;
$v = 77;

$result = !(($m > $n && $r > $s) || (!($t < $v && $s > $m)));

/* !((false && false) || (!(true && false)));
!((false) || (true));
!(true);
false; */


var_dump($result); //bool(false)