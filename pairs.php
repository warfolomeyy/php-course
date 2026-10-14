<?php


$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$count = count($nums);

for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count; $j++) {
        if ($i === $j) {
            continue;
        }
        echo $nums[$i] . ' ' . $nums[$j] . PHP_EOL;
    }
}