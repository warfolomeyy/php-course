<?php

$rawLine = trim(fgets(STDIN));
$elements = explode(' ', $rawLine);

$nonZeros = [];
$zeros = [];

foreach ($elements as $el) {
    if ((int) $el === 0) {
        $zeros[] = $el;
    } else {
        $nonZeros[] = $el;
    }
}

$resultArray = array_merge($nonZeros, $zeros);
echo implode(' ', $resultArray);