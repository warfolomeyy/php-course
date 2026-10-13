<?php

function getMin(float $a, float $b, float $c): float {
    if ($a < $b && $a < $c) {
        return $a;
    }
    if ($b < $c) {
        return $b;
    }
    return $c;
}

/* альтернативный вариантт

function getMin(float $a, float $b, float $c): float {
    return min($a, $b, $c);
}

*/

function multiplyByTwo(float &$a, float &$b): void {
    $a *= 2;
    $b *= 2;
}

function factorial(int $n): int {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function printNumbers(int $n): void {
    if ($n < 0) {
        return;
    }
    printNumbers($n - 1);
    echo $n . PHP_EOL;
}