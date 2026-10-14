<?php

$line = trim(fgets(STDIN));
$parts = explode(' ', $line);

$numbers = [];
foreach ($parts as $part) {
    $numbers[] = (int)$part;
}

$maxSum = $numbers[0];
$currentSum = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    $currentSum = max($numbers[$i], $currentSum + $numbers[i]);
    $maxSum = max($maxSum, $currentSum);
}

echo $maxSum;