<?php

$names = [
    "Garret Mullen",
    "Jacqueline Blanch",
    "Ellyn Torkelson",
    "Simon Nimmo",
];

echo count($names)."\n\n";
echo $names[2]."\n\n";
print_r($names);
echo "\n\n\n";


$assoc = [
    "data" => "value",
    "moredata" => 1,
    "somethingelse" => [
        1, 2, 3
    ],
    "lastthing" => [
        "elem1" => 1,
        "elem2" => 2,
        "elem3" => 3
    ],
];

echo $assoc['lastthing']['elem2'] . "\n\n";
print_r($assoc);

