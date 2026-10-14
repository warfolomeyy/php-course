<?php


$inputLine = trim(fgets(STDIN));
$items = explode(' ', $inputLine);

$frequencyMap = array_count_values($items);
$repeatedNums = [];

foreach ($frequencyMap as $num => $occurrences) {
    if ($occurrences >= 2) {
        $repeatedNums[] = $num;
    }
}

sort($repeatedNums);
echo implode(' ', $repeatedNums);