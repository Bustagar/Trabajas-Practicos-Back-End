<?php

$a = 10;
$b = 20;

$result = !(! ($a != 10) || (20 > $b) && ($a = 10) && false ) && true;

/* $result = false; */

var_dump($result);