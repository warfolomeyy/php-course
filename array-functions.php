<?php

$array = [1, 3, 2];
sort($array);
$string = implode(":", $array);
echo $string;

$array2 = [1, 2, 3, 4, 5];

$slice = array_slice($array2, 1, 3);

var_dump($slice);