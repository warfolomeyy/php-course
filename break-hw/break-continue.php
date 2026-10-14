<?php


function finNum(array $array, int $num): bool
{
    foreach ($array as $volume) {
        if ($volume == $num) {
            return true;
        }
    }
    return false;
}

function countInArray(array $array, int $num): int
{
    $count = 0;
    foreach ($array as $volume) {
        if ($volume === $num) {
            $count++;
        }
    }
    return count;
}