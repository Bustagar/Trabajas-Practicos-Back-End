<?php

$a = 33;

$result = !(($a > 10) && ($a < 20));
/* var_dump(!(($a > 10) && ($a < 20))); */

var_dump($result); //bool(true)  



$resultado = !(($a > 10) || !($a < 20));
/* var_dump(!(($a > 10) || !($a < 20))); */

var_dump($resultado); //bool(false)