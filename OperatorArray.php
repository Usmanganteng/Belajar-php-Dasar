<?php

//penggabungan array
$first = [
    "first_name" => "aldizar"
];

$last = [
    "last_name" => "ilham"
];

$full = $first + $last;
var_dump($full);

//perbandingan array
$first = [
    "first_name" => "aldizar",
    "last_name" => "ilham"
];

$last = [
    "last_name" => "ilham",
    "first_name" => "aldizar"
];

var_dump($first == $last);
var_dump($first === $last);