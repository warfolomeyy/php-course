<?php


$nums = explode(' ', trim(fgets(STDIN)));
$count = (int)trim(fgets(STDIN));

function find(array $array, int $count): array
{
    if ($count === 1) {
        return $array;
    }

    $lowLevelCombinations = find($array, $count - 1);

    $currentLevelCombinations = [];
    foreach ($array as $item) {
        foreach ($lowLevelCombinations as $lowLevelCombination) {
            $currentLevelCombinations[] = trim($item . ' ' . $lowLevelCombination);
        }
    }
    return $currentLevelCombinations;
}

foreach (find($nums, $count) as $combination) {
    echo $combination . PHP_EOL;
}