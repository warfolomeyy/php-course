<?php
$array = [
    'animals' => [
        'mammals' => [
            'cats' => [
                ['barsik' => 'age - 3'],
                ['murka' => 'age - 5']
            ]
        ]
    ]
];

$array['animals']['mammals']['cats'][] = ['persik' => 'age - 2'];