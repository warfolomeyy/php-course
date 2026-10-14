<?php

$firstWord = trim(fgets(STDIN));
$secondWord = trim(fgets(STDIN));

$firstChars = str_split($firstWord);
$secondChars = str_split($secondWord);

sort($firstChars);
sort($secondChars);

if ($firstChars === $secondChars) {
    echo 'yes';
} else {
    echo 'no';
}