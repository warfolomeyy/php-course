<?php

$rawInput = trim(fgets(STDIN));
$parts = explode(' ', $rawInput);

$intList = [];
foreach ($parts as $part) {
    $intList[] = (int)$part;
}

sort($intList);
$total = count($intList);

$rightPairProduct = $intList[$total - 1] * $intList[$total - 2];
$leftPairProduct = $intList[0] * $intList[1];

echo max($rightPairProduct, $leftPairProduct);