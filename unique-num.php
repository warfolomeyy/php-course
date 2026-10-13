<?php


$line = trim(fgets(STDIN));
$numbers = explode(' ', $line);
$uniqueNumbers = array_unique($numbers);
sort($uniqueNumbers);

echo implode(' ', $uniqueNumbers);