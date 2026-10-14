<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

usort($nums, function($a, $b) {
    return ($b . $a) <=> ($a . $b);
});

echo implode('', $nums) . PHP_EOL;