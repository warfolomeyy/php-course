<?php


$line = trim(fgets(STDIN));
$number = (int)$line;

for ($i = 1; $i <= $number; $i++) {
    if ($i % 2 === 0) {
        echo $i . ' ';
    }
}