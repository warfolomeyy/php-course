<?php


$n = (int)trim(fgets(STDIN));

if ($n === 0) {
    echo 0;
    exit;
}

$a = 0;
$b = 1;

for ($i = 2; $i <= $n; $i++) {
    $current = $a + $b;
    $a = $b;
    $b = $current;
}

echo $b;