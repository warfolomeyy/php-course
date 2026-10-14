<?php


$inputString = trim(fgets(STDIN));
$numbers = explode(' ', $inputString);

$counts = array_count_values($numbers);
arsort($counts);

$keys = array_keys($counts);
echo reset($keys);