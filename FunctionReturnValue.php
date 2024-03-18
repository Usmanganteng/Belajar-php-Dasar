<?php

// FunctionReturnValue dengan cara simple
function sum(int $pertama, int $kedua) : int
{
    $total = $pertama + $kedua;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

// Function Return Value dengan cara yan sedikit complex
function getFinalValue(int $value) : string
{
    if ($value >= 80) {
        return "A";
    }else if ($value >= 70) {
        return "B";
    }else if ($value >= 60) {
        return "C";
    }else if ($value >= 50) {
        return "D";
    }else {
        return "E";
    }

    echo "ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);