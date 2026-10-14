<?php


$gameScores = [
    22,
    33,
    44,
    55,
    66
];

$totalScore = 0;
$roundsCount = 0;

foreach ($gameScores as $score) {
    $totalScore += $score;
    $roundsCount++;
}

$averageScore = $totalScore / $roundsCount;